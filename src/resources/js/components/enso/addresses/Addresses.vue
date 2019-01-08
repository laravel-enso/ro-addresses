<template>

    <div class="wrapper">
        <div class="controls"
            v-if="controls">
            <button class="button"
                @click="create()">
                <span v-if="!isMobile">
                    {{ __('New Address') }}
                </span>
                <span class="icon">
                    <fa icon="plus"/>
                </span>
            </button>
            <button class="button has-margin-left-small"
                @click="fetch()">
                <span v-if="!isMobile">
                    {{ __('Reload') }}
                </span>
                <span class="icon">
                    <fa icon="sync"/>
                </span>
            </button>
            <p class="control has-icons-left has-icons-right has-margin-left-large">
                <input class="input is-rounded"
                    type="text"
                    v-model="internalQuery"
                    :placeholder="__('Filter')">
                <span class="icon is-small is-left">
                    <fa icon="search"/>
                </span>
                <span class="icon is-small is-right clear-button"
                    v-if="internalQuery"
                    @click="internalQuery = ''">
                    <a class="delete is-small"/>
                </span>
            </p>
        </div>
        <div class="columns is-multiline"
            :class="{'has-margin-top-large': controls}">
            <div class="column is-half-tablet is-one-third-widescreen"
                v-for="(address, index) in filteredAddresses"
                :key="index">
                <address-card :address="address"
                    @set-default="setDefault(address)"
                    @edit="edit(address)"
                    @delete="destroy(address, index)">
                    <template slot="address" slot-scope="{ address }">
                        <p>
                            <span v-if="address.street_type">
                                {{ __(address.street_type) }}
                            </span>
                            <span v-if="address.street">
                                {{ address.street }}
                            </span>
                            <span v-if="address.number">
                                <span >
                                    {{ __('Number') }}
                                </span>
                                {{ address.number }}
                            </span>
                        </p>
                        <p>
                            <span v-if="address.building">
                                {{ __(address.building_type) }}: {{ address.building }},
                            </span>
                            <span v-if="address.entry">
                                {{ __('Entry') }}: {{ address.entry }},
                            </span>
                            <span v-if="address.floor">
                                {{ __('Floor') }}: {{ address.floor }},
                            </span>
                            <span v-if="address.apartment">
                                {{ __('Apt') }}: {{ address.apartment }},
                            </span>
                        </p>
                        <p>
                            <span v-if="address.locality_name">
                                {{ address.locality_name }},
                            </span>
                            <span v-if="address.neighbourhood">
                                {{ address.neighbourhood }}
                            </span>
                            <span v-if="address.sector">
                                {{ __('Sector') }}: {{ address.sector }}
                            </span>
                            <br>
                            <span v-if="address.postal_area">
                                {{ address.postal_area }}
                            </span>
                        </p>
                        <p>
                            <span class="icon">
                                <fa icon="globe"/>
                            </span>
                            {{ address.country_name }} <br>
                            <span class="icon" v-if="address.obs">
                                <fa icon="sticky-note"/>
                            </span>
                            {{ address.obs }}
                        </p>
                    </template>
                </address-card>
            </div>
        </div>
        <address-form :path="path"
            @loaded="setFields()"
            @close="reset();"
            @submit="fetch(); reset();"
            ref="form"
            v-if="path">
            <template slot="county_id" slot-scope="{ field, errors }">
                <vue-select :label="field.meta.label || 'name'"
                    :has-error="errors.has(field.name)"
                    :options="field.meta.options"
                    v-model="field.value"
                    @input="
                        localityParams.county_id = $event;
                        errors.clear(field.name);
                    "/>
            </template>
            <template slot="locality_id" slot-scope="{ field, errors }">
                <vue-select v-model="field.value"
                    :label="field.meta.label"
                    :has-error="errors.has(field.name)"
                    :params="localityParams"
                    :source="field.meta.source"
                    @input="errors.clear(field.name); sectors = field.value === bucharestId"/>
            </template>
            <template slot="sector" slot-scope="{ field, errors }">
                <vue-select v-model="field.value"
                    :label="field.meta.label"
                    :has-error="errors.has(field.name)"
                    :disabled="!sectors"
                    :options="field.meta.options"
                    @input="errors.clear(field.name)"
                    ref="sector"/>
            </template>
        </address-form>
    </div>

</template>

<script>

import { mapState } from 'vuex';
import { library } from '@fortawesome/fontawesome-svg-core';
import { faPlus, faSync, faSearch } from '@fortawesome/free-solid-svg-icons';
import AddressCard from './AddressCard.vue';
import AddressForm from './AddressForm.vue';
import VueSelect from '../select/VueSelect.vue';

library.add(faPlus, faSync, faSearch);

export default {
    name: 'Addresses',

    components: { AddressCard, AddressForm, VueSelect },

    props: {
        id: {
            type: Number,
            required: true,
        },
        type: {
            type: String,
            default: null,
        },
        query: {
            type: String,
            default: '',
        },
        controls: {
            type: Boolean,
            default: false,
        },
    },

    data: () => ({
        loading: false,
        addresses: [],
        path: null,
        internalQuery: '',
        localityParams: {
            county_id: null,
        },
        sectors: false,
        bucharestId: null,
    }),

    computed: {
        ...mapState('layout', ['isMobile']),
        filteredAddresses() {
            const query = this.internalQuery.toLowerCase();

            return query
                ? this.addresses.filter(({ city, street }) =>
                    city.toLowerCase().indexOf(query) > -1
                    || street.toLowerCase().indexOf(query) > -1)
                : this.addresses;
        },
        count() {
            return this.filteredAddresses.length;
        },
        params() {
            return {
                addressable_id: this.id,
                addressable_type: this.type,
            };
        },
    },

    watch: {
        count() {
            this.$emit('update');
        },
        sectors() {
            if (this.$refs.sector && !this.sectors) {
                this.$refs.sector.clear();
            }
        },
        query() {
            this.internalQuery = this.query;
        },
    },

    created() {
        this.fetch();
    },

    methods: {
        fetch() {
            this.loading = true;

            axios.get(route('core.addresses.index'), { params: this.params })
                .then(({ data }) => {
                    this.addresses = data;
                    this.loading = false;
                    this.$emit('update');
                }).catch(error => this.handleError(error));
        },
        edit(address) {
            this.path = route('core.addresses.edit', address.id);
        },
        create() {
            this.path = route('core.addresses.create', this.params);
        },
        setDefault(address) {
            this.loading = true;

            axios.patch(route('core.addresses.setDefault', address.id))
                .then(() => this.fetch())
                .catch(error => this.handleError(error));
        },
        destroy(address, index) {
            this.loading = true;

            axios.delete(route('core.addresses.destroy', address.id))
                .then(() => {
                    this.addresses.splice(index, 1);
                    this.loading = false;
                }).catch(error => this.handleError(error));
        },
        setFields() {
            this.$refs.form.field('addressable_type').value = this.type;
            this.$refs.form.field('addressable_id').value = this.id;
            this.localityParams.county_id = this.$refs.form.field('county_id').value;
            this.bucharestId = this.$refs.form.param('bucharestId');
            this.$emit('form-loaded');
        },
        reset() {
            this.path = null;
        },
    },
};

</script>

<style lang="scss" scoped>

    .controls {
        display: flex;
        justify-content: center;
    }

</style>