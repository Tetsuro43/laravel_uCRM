<!-- インプットボックスのコンポーネント -->
<script setup>
import { onMounted, ref } from 'vue';

defineProps(['modelValue']);

// 親（ComponentTest.vueなど）に打ち上げる時の名前
defineEmits(['update:modelValue']);

const input = ref(null);

onMounted(() => {
    if (input.value.hasAttribute('autofocus')) {
        input.value.focus();
    }
});

defineExpose({ focus: () => input.value.focus() });
</script>

<template>
    <!-- @inputというのは、JavaScriptのイベントで、
        文字を入力したタイミングで設定した内容が発火
        $emit('イベント名', 親コンポーネントに打ち上げるinputの中のイベント値)
    -->
    <input
        class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm"
        :value="modelValue"
        @input="$emit('update:modelValue', $event.target.value)"
        ref="input"
    />
</template>
