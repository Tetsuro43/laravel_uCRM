<script setup>
/*
from '@/'を指定することで、resources/jsが自動で生成される
ファイル名の拡張子（.vue）まで付けないとファイルの読み込みができない
*/
/* Layouts */
import GuestLayout from '@/Layouts/GuestLayout.vue';
/* Components */
import Label from '@/Components/InputLabel.vue';
import Input from '@/Components/TextInput.vue';

const emitTest = (e) => {
    console.log(e);
}

</script>

<template>
    <GuestLayout>
        GuestLayoutのテスト表示
        <Label value="件名">タイトル</Label>
        <!-- @emit名="実行したいメソッドオブジェクト" -->
        <Input
            modelValue="これは初期値です"
            @update:modelValue="emitTest"
            ></Input>
    </GuestLayout>
</template>
