<template>
    <form @submit.prevent="handleSubmit">
        <slot></slot>
        <button type="submit" class="btn btn-primary">{{ buttonText }}</button>
    </form>
</template>

<script>
export default {
    props: {
        submitHandler: {
            type: Function,
            required: true
        },
        buttonText: {
            type: String,
            default: 'Submit'
        }
    },
    methods: {
        handleSubmit() {
            this.submitHandler();
        }
    }
}
</script>
