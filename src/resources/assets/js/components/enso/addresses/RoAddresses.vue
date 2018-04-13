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

        <template slot="county_id" slot-scope="{ field, errors }">
            <vue-select :label="field.meta.label || 'name'"
                v-model="field.value"
                @input="params.county_id=$event;errors.clear(field.name);"
                :options="field.meta.options">
            </vue-select>
        </template>
        <template slot="locality_id" slot-scope="{ field, errors }">
            <vue-select :label="field.meta.label"
                :params="params"
                v-model="field.value"
                @input="errors.clear(field.name); sectors = $event === bucharestId;"
                :source="field.meta.source">
            </vue-select>
        </template>
        <template slot="sector" slot-scope="{ field, errors }">
            <vue-select :label="field.meta.label"
                :disabled="!sectors"
                ref="sector"
                v-model="field.value"
                @input="errors.clear(field.name);"
                :options="field.meta.options">
            </vue-select>
        </template>
    </addresses>

</template>
<script>

import Addresses from './Addresses.vue';
import VueSelect from '../select/VueSelect.vue';

export default {
    name: 'RoAddresses',

    components: { Addresses, VueSelect },

    data() {
        return {
            sectors: false,
            bucharestId: 13749,
            params: {
                county_id: null,
            },
        };
    },

    watch: {
        sectors() {
            if (!this.sectors) {
                this.$refs.sector.clear();
            }
        },
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
