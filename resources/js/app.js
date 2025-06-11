import './bootstrap';
import { createApp } from 'vue';
import ProfileCard from './components/ProfileCard.vue'; // パスを修正

const app = createApp({});
app.component('ProfileCard', ProfileCard);
app.mount('#app');