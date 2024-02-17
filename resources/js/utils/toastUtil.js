import { createApp } from 'vue';
import ToastComponent from '@/components/ToastComponent.vue';

export function showToast({ title, message, type }) {
    const app = createApp(ToastComponent, { title, message, type });
    const mountPoint = document.createElement('div');
    document.body.appendChild(mountPoint);
    const component = app.mount(mountPoint);
    component.show();

    setTimeout(() => {
        app.unmount();
        document.body.removeChild(mountPoint);
    }, 5000);
}
