<template>
  <center>
    <v-container fluid>
      <br /><br />
      <v-card class="mt-5" id="inspire">
        <div class="col-3">
          <span class="input-group-text" id="basic-addon3"
            >Selecione o seu plano:</span
          >
          <select class="form-select mb-3" v-model="minutesPlan">
            <option v-for="plan in plans" :value="plan.minutes" :key="plan.id">
              {{ plan.name }}
            </option>
          </select>
        </div>
        <div class="col-3">
          <span class="input-group-text" id="basic-addon3">
            Selecione o DDD do Remetente:</span
          >
          <select required class="form-select mb-3" v-model="dddOrigin">
            <option v-for="code in codes" :key="code.value">
              {{ code.ddd }}
            </option>
          </select>
        </div>
        <div class="col-3">
          <span class="input-group-text" id="basic-addon3">
            Selecione o DDD do Destinatário:
          </span>
          <select
            required
            class="form-select form-select mb-3"
            v-model="dddDestination"
          >
            <option v-for="code in codes" :key="code.id">
              {{ code.ddd }}
            </option>
          </select>
        </div>
        <div class="col-3">
          <span class="input-group-text" id="basic-addon3">
            Preencha com os Minutos Utilizados:
          </span>
          <input
            required
            class="form-control form-control-mb3"
            type="number"
            v-model="timeUsed"
          />
          <br />
          <button class="btn btn-primary" @click="calculateFee">
            Calcular
          </button>
          <button class="btn btn-secondary" @click="resetData">Limpar</button
          ><br /><br />

          <span class="input-group-text" v-show="result"
            >Taxa Adicional com Plano: R${{ additional_fee }}</span
          ><br />
          <span class="input-group-text" v-show="result"
            >Valor sem plano: R$ {{ noPlanValue }}</span
          >
          <span class="input-group-text" v-if="errored">
            Erro: Resultado Indisponível!<br />
            Verifique se os dados estão preenchidos corretamente!<br />
            Caso estejam contate o suporte!</span
          >
        </div>
      </v-card>
    </v-container>
  </center>
</template>
<script>
import axios from "axios";

export default {
  name: "App",
  data() {
    return {
      codes: [],
      result: false,
      errored: false,
      plans: [],
      dddOrigin: null,
      dddDestination: null,
      timeUsed: null,
      minutesPlan: null,
      additional_fee: null,
      noPlanValue: null,
    };
  },
  async created() {
    let codes = await axios.get("http://localhost:8000/api/codes");
    let plans = await axios.get("http://localhost:8000/api/plans");
    this.codes = codes.data;
    this.plans = plans.data;
  },
  components: {},
  methods: {
    calculateFee() {
      this.result = false;
      axios
        .get(
          `http://localhost:8000/api/calculate/${this.dddOrigin}/${this.dddDestination}/${this.timeUsed}/${this.minutesPlan}`
        )
        .then((response) => {
          this.additional_fee = response.data.additional_fee;
          this.noPlanValue = response.data.no_plan_value;
          this.errored = false;
          this.result = true;
        })
        .catch((error) => {
          console.log(error);
          this.errored = true;
        });
    },

    resetData() {
      this.minutesPlan = null;
      this.dddOrigin = null;
      this.dddDestination = null;
      this.timeUsed = null;
      this.result = false;
    },
  },
};
</script>
<style>
</style>
