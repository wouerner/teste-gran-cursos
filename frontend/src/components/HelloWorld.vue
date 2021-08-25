<template>
  <div>
      <h1>Teste Gran</h1>
      <label>
        órgão
      </label>
      <select v-model="orgao" >
          <option v-for="(orgao, index ) in orgaos" :key="index" :value="orgao.id">
              {{orgao.nome}}
          </option>
      </select>
      <hr>
      <label>
       banca
      </label>
      <select v-model="banca">
          <option v-for="(banca, index ) in bancas" :key="index" :value="banca.id">
              {{banca.nome}}
          </option>
      </select>
      <button @click="pesquisar()">
          pesquisar
      </button>
      <hr>
      <assunto-arvore 
          v-for="(assunto, index) in assuntoQuestoes" 
          :key="index"
          :node="assunto" />
  </div>
</template>

<script>
import axios from 'axios';
import assuntoArvore from './assuntoArvore';

export default {
  name: 'HelloWorld',
  props: {
    msg: String,
    bancas: Array,
    orgaos: Array,
    banca: Number,
    orgao: Number,
    questoes: Array,
    assuntoQuestoes: Array
  },
  components:{
    assuntoArvore
  },
  created() {

    /*axios.get('http://localhost:8080/index.php?controller=questao&orgao=1&banca=1')
          .then(r => console.log(this.questoes = r.data))*/

    axios.get('http://localhost:8080/index.php?controller=orgao')
          .then(r => console.log(this.orgaos = r.data))

    axios.get('http://localhost:8080/index.php?controller=banca')
          .then(r => console.log(this.bancas = r.data))

    /*axios.get('http://localhost:8080/index.php?controller=assunto&assuntoPaiId=0')
          .then(r => console.log(r.data))*/
  },
  methods: {
    async assunto(id){
       let res;

        try {
            res = await axios.get('http://localhost:8080/index.php?controller=assunto&assuntoPaiId=' + id)
        } catch (e){
            res = [];
        }

        console.log('data', res.data)
       return res.data;
    },
    pesquisar(){
        console.log('pesquisar');
        axios.get('http://localhost:8080/index.php?controller=assuntoQuestao&orgao='+this.orgao+'&banca='+this.banca)
              .then(r => this.assuntoQuestoes = r.data)
    }
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
</style>
