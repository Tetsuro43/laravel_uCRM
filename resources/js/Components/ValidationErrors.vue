<!-- update ver.でこのファイルがデフォルトでなくなったため新しく作った -->
<script setup>
import { computed } from 'vue';
// import { usePage } from '@inertiajs/inertia-vue3'; // versionが上がって、使用不可

// const errors = computed(() => usePage().props.value.errors); // versionが上がって、使用不可

const props = defineProps({
    errors: Object
});
/* computedは、値を監視して変更があったら処理をする機能(値があったらtrueにする？) */
const hasErrors = computed(() => Object.keys(props.errors).length > 0);

</script>

<template>
    <div v-if="hasErrors">
        <div class="font-medium text-red-600">問題が発生しました。</div>

        <ul class="mt-3 list-disc list-inside text-sm text-red-600">
            <li v-for="(error, key) in props.errors" :key="key">{{ error }}</li>
        </ul>
    </div>
</template>
