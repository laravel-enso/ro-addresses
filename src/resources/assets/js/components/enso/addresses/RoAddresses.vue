<template>

    <addresses
            @form-loaded="setCountyId"
            v-bind="$attrs"
            v-on="$listeners">

        <!--customized card content-->
        <template slot="address" slot-scope="{ address }">
            <span v-if="address.street_type">
                {{ __(address.street_type) }}
            </span>
            <span v-if="address.street">
                {{ address.street }}
            </span>
            <span v-if="address.number">
                {{ __('Number') }}: {{ address.number }}
            </span>
            <br>
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
            <br>
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
            <br>
            <span class="icon">
                <fa icon="globe"/>
            </span>
            {{ address.country_name }} <br>
            <span class="icon" v-if="address.obs">
                <fa icon="sticky-note"/>
            </span>
            {{ address.obs }}
        </template>

        <!--custom form elements-->
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
        getCountyId(form) {
            const attribute = form.fields.find(attribute => attribute.name === 'county_id');

            return attribute.value;
        },
        setCountyId(formData) {
            this.params.county_id = this.getCountyId(formData);
        },
    },
};

</script>
