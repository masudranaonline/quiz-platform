<template>
    <div class="page-header">
        <div>
            <h2 class="main-content-title tx-24 mg-b-5">{{ title }}</h2>
            <ol class="breadcrumb">
                <li class="breadcrumb-item" v-for="(item, index) in breadcrumbs" :key="index">
                    <a v-if="item.link" :href="item.link">{{ item.label }}</a>
                    <span v-else>{{ item.label }}</span>
                </li>
            </ol>
        </div>
        <slot></slot>
    </div>
</template>

<script>
export default {
    props: {
        title: {
            type: String,
            required: true,
        },
        breadcrumbs: {
            type: Array,
            required: true,
        },
    },
};
</script>

<style>
/* Add your styles here */
</style>
