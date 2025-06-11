import './bootstrap';
import { createApp } from 'vue';
import ProfileCard from './Components/ProfileCard.vue'; // Adjust path if needed

const app = createApp({});
app.component('ProfileCard', ProfileCard);
app.mount('#app');