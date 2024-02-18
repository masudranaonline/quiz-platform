
<template>
    <div class="form-group">
        <label :for="id" class="form-label">{{ label }}</label>
        <select class="form-control" :id="id" :value="modelValue" @change="$emit('update:modelValue', $event.target.value)">
            <option v-for="option in options" :key="option.value" :value="option.value">
                {{ option.text }}
            </option>
        </select>
    </div>
</template>

<script>
export default {
    props: {
        label: {
            type: String,
            default: ''
        },
        modelValue: {
            default: ''
        },
        options: {
            type: Array,
            default: () => []
        },
        id: {
            type: String,
            default: ''
        }
    }
}
</script>
