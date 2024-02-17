<template>
    <div class="form-group">
        <label :for="id" class="form-label">{{ label }}</label>
        <textarea
            class="form-control"
            :id="id"
            :placeholder="placeholder"
            :rows="rows"
            :value="modelValue"
            @input="$emit('update:modelValue', $event.target.value)"
        ></textarea>
        <small>{{ info }}</small>
    </div>
</template>

<script>
export default {
    props: {
        label: {
            type: String,
            default: '',
        },
        placeholder: {
            type: String,
            default: '',
        },
        modelValue: {
            type: String,
            default: '',
            required: true,
        },
        id: {
            type: String,
            default: '',
        },
        info: {
            type: String,
            default: '',
        },
        rows: {
            type: Number,
            default: 4,
        },
    },
};
</script>
