import { createApp } from 'vue';
import ConfirmationDialogComponent from '@/components/ConfirmationComponent.vue';

export function showConfirm({ message, onConfirm, onCancel }) {
    const app = createApp(ConfirmationDialogComponent, {
        message,
        onConfirm,
        onCancel
    });
    const mountPoint = document.createElement('div');
    document.body.appendChild(mountPoint);
    const component = app.mount(mountPoint);

    const cleanup = () => {
        app.unmount();
        document.body.removeChild(mountPoint);
    };

    component.$watch('isVisible', (newValue) => {
        if (!newValue) {
            cleanup();
        }
    });
}






