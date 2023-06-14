<script setup>
import { reactive } from 'vue';
import { Inertia } from '@inertiajs/inertia'; // import元を間違えないように

defineProps({
    errors: Object
});

/*
オブジェクトにはreactive()を使用する
inputタグから値を受け取る
*/
const form = reactive({
    // 初期値nullに設定
    title: null,
    content: null
});

const submitFunction = () => {
    // Inertia.post('URI', 渡す値（オブジェクト：上で定義）);
    Inertia.post('/inertia', form);
}
</script>

<template>
    <form @submit.prevent="submitFunction">
        <input type="text" name="title" v-model="form.title">{{ form.title }}<br>
        <div v-if="errors.title">{{ errors.title }}</div><br>
        <input type="text" name="content" v-model="form.content">{{ form.content }}<br>
        <div v-if="errors.content">{{ errors.content }}</div><br>
        <button>送信</button>
    </form>

</template>
