<template>
    <div class="form-group">
        <label :for="inputId" class="form-label">{{ label }}</label>
        <input
            type="file"
            class="form-control"
            :ref="inputRef"
            @change="handleFileUpload"
            :id="inputId"
        />
    </div>
</template>

<script>
export default {
    props: {
        label: {
            type: String,
            required: true
        },
        inputId: {
            type: String,
            default: 'file-input'
        },
        inputRef: {
            type: String,
            default: 'fileInput'
        }
    },
    data() {
        return {
            selectedFile: null
        };
    },
    methods: {
        handleFileUpload(event) {
            this.selectedFile = event.target.files[0];
            this.$emit('file-selected', this.selectedFile);
        }
    },
    watch: {
        selectedFile(newFile) {
            this.$emit('update:modelValue', newFile);
        }
    },
    model: {
        prop: 'modelValue',
        event: 'update:modelValue'
    }
}
</script>
