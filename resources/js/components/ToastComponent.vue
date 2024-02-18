
<template>
    <div  class="toast" :class="[toastClass, { show: showToast }]" @click="closeToast">
        <div class="toast-header">
            {{ title }}
            <span class="toast-close">×</span>
        </div>
        <div class="toast-body">
            {{ message }}
        </div>
    </div>
</template>

<script>
export default {
    props: {
        title: {
            type: String,
            default: 'Notification'
        },
        message: {
            type: String,
            default: 'This is a toast message.'
        },
        type: {
            type: String,
            default: 'info' // can be 'success', 'error', 'info'
        }
    },

    data() {
        return {
            showToast: false
        };
    },

    computed: {
        toastClass() {
            return {
                'toast-success': this.type === 'success',
                'toast-error': this.type === 'error',
                'toast-info': this.type === 'info',
                'visible': this.showToast
            };
        }
    },

    methods: {
        show() {
            this.showToast = true;
            setTimeout(() => {
                this.closeToast();
            }, 3000);
        },
        closeToast() {
            this.showToast = false;
        }
    }
};
</script>

<style scoped>
.toast {
    position: fixed;
    top: 20px;
    right: 20px;
    margin: auto;
    z-index: 10000;
    width: 350px;
    border-radius: 10px;
    box-shadow: 0 2px 12px rgba(0, 0, 0, 0.1);
    transition: opacity 0.3s, transform 0.3s;
    transform: translateY(-10px);
    opacity: 0;
    pointer-events: none;
}

.toast.visible {
    transform: translateY(0);
    opacity: 1;
    pointer-events: auto;
}

.toast-header {
    padding: 10px 15px;
    font-weight: bold;
    display: flex;
    justify-content: space-between;
    align-items: center;
    background-color: inherit;
    color: inherit;
}

.toast-body {
    padding: 10px 15px;
    background-color: inherit;
    color: inherit;
}

.toast-close {
    cursor: pointer;
    font-size: 16px;
    color: #fff;
}

.toast-success {
    background-color: #282d3e;
    color: #e6ffe6;
}

.toast-error {
    background-color: #d37712;
    color: #ffe6e6;
}

.toast-info {
    background-color: #255487;
    color: #e6f7ff;
}
</style>

