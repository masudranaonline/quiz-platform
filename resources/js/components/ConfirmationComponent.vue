<template>
    <div v-if="isVisible" class="confirmation-overlay">
        <div class="confirmation-dialog">
            <div class="confirmation-header">
                <h5>Please Confirm</h5>
                <button class="btn-close" @click="cancel"></button>
            </div>
            <div class="confirmation-content">
                {{message}}
            </div>
            <div class="confirmation-buttons">
                <button class="btn btn-outline-secondary" @click="cancel">Cancel</button>
                <button class="btn btn-danger" @click="confirm">Confirm</button>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    props: ['message', 'onConfirm', 'onCancel'],
    data() {
        return {
            isVisible: true
        };
    },
    methods: {
        confirm() {
            this.isVisible = false;
            this.$emit('confirmed');
            this.onConfirm();
        },
        cancel() {
            this.isVisible = false;
            this.$emit('cancelled');
            this.onCancel();
        }
    }
};
</script>

<style scoped>
.confirmation-overlay {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5);
    display: flex;
    align-items: center;
    justify-content: center;
    transition: opacity 0.3s ease;
}

.confirmation-dialog {
    width: 90%;
    max-width: 400px;
    background-color: white;
    padding: 20px;
    border-radius: 15px;
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease, opacity 0.3s ease;
    transform: scale(1);
    opacity: 1;
}

.confirmation-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 20px;
    font-weight: 500;
}

.confirmation-content {
    margin-bottom: 20px;
    font-size: 16px;
    line-height: 1.5;
    color: #555;
}

.confirmation-buttons {
    display: flex;
    justify-content: flex-end;
    gap: 10px;
}

.btn {
    transition: background-color 0.2s ease, transform 0.2s ease;
}

.btn:hover {
    transform: translateY(-2px);
}

.btn:active {
    transform: translateY(0);
}

.btn-outline-secondary {
    border-color: #aaa;
    color: #555;
}

.btn-outline-secondary:hover {
    background-color: #f0f0f0;
}

.btn-close {
    background: none;
    border: none;
    font-size: 24px;
    line-height: 1;
    color: #bbb;
    cursor: pointer;
    transition: color 0.2s ease;
}

.btn-close:hover {
    color: #777;
}
</style>

