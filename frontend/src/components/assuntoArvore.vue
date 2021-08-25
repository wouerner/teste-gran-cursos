<template>
    <li class="node-tree">
        <span class="label">{{ node.id }} - {{ node.assunto }} ({{count.data.total}})</span>

        <ul v-if="sub && sub.data">
            <assuntoArvore 
               v-for="(child, i) in sub.data" :node="child"
               :key="i"
            ></assuntoArvore>
        </ul>
    </li>
</template>

<script>
import axios from 'axios';

export default {
  name: "assuntoArvore",
  props: {
      node: Object,
      count: Object,
      sub: Array
    },
    async created() {
        await this.subSync()
    },
    methods: {
        async subSync(){
            if (this.node.id !== undefined) {
                this.sub = await axios.get('http://localhost:8080/index.php?controller=assunto&assuntoPaiId=' + this.node.id)
                this.count = await axios.get('http://localhost:8080/index.php?controller=questaoCount&assunto=' + this.node.id)
            } else {
                this.sub = undefined 
            }
        }
    }
};
</script>
