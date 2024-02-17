<template>
    <div class="overflow-x-auto">
        <table :class="'table table-zebra table-compact w-full ' + tblClass">
            <thead class="border-b">
                <tr>
                    <th class="th-dark" v-for="header in headers" :key="header">{{ header }}</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-300">
                <slot></slot>
            </tbody>
        </table>
    </div>
</template>

<script>
export default {
    props: {
        headers: {
            type: Array,
            default: () => []
        },
        tblClass: {
            type: String,
            default: ""
        }
    }
}
</script>
