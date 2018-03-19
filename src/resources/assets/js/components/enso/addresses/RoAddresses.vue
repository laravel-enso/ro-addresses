<template>

    <addresses @form-loaded="params.county_id = countyId($event)"
        v-bind="$attrs"
        v-on="$listeners">
        <template slot="address" slot-scope="{ address }">
            <p>
                <span v-if="address.street_type">
                    {{ __(address.street_type) }}
                </span>
                <span v-if="address.street">
                    {{ address.street }}
                </span>
                <span v-if="address.number">
                    {{ __('Number') }}: {{ address.number }}
                </span>
            </p>
            <p>
                <span v-if="address.building">
                    <span class="has-text-grey">
                        {{ __(address.building_type) }}
                    </span>
                    {{ address.building }},
                </span>
                <span v-if="address.entry">
                    {{ __('Entry') }}: {{ address.entry }}
                </span>
                <span v-if="address.floor">
                    {{ __('Floor') }}: {{ address.floor }}
                </span>
                <span v-if="address.apartment">
                    {{ __('Apartment') }}: {{ address.apartment }}
                </span>
            </p>
            <p>
                <span v-if="address.sub_administrative_area">
                    {{ __('Neighborhood') }}: {{ address.sub_administrative_area }}
                </span>
                <span v-if="address.city">
                    {{ address.city }},
                </span>
                <span v-if="address.administrative_area">
                    {{ address.administrative_area }}
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

        <template slot="county_id" slot-scope="{ field, errors }">
            <vue-select name="county_id"
                :label="field.meta.label || 'name'"
                v-model="field.value"
                @input="params.county_id=$event;errors.clear(field.name);"
                :options="field.meta.options">
            </vue-select>
        </template>
        <template slot="locality_id" slot-scope="{ field, errors }">
            <vue-select name="locality_id"
                :label="field.meta.label || 'name'"
                :params="params"
                v-model="field.value"
                @input="errors.clear(field.name);"
                :source="field.meta.source">
            </vue-select>
        </template>
    </addresses>

</template>
<script>

import { mapGetters } from 'vuex';
import Addresses from './Addresses.vue';
import VueSelect from '../select/VueSelect.vue';

export default {
    components: { Addresses, VueSelect },
    data() {
        return {
            params: {
                county_id: null,
            },
        };
    },
    computed: {
        ...mapGetters('locale', ['__']),
    },
    methods: {
        countyId(form) {
            return form.sections
                .reduce((fields, section) => fields.concat(section.fields), [])
                .find(attribute => attribute.name === 'county_id')
                .value;
        },
    },
};

</script>
