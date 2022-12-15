var app = new Vue({
  el: '#app',
  data: {
    arrayProdotti: [],
    arrayGeneri: [],
    selectGenere: ''
  },
  mounted() {
    axios.get('./api/index.php')
      .then((res) => {
        // console.log(res.data)

        this.arrayProdotti = res.data

        //ciclo
        this.arrayProdotti.forEach((elem) => {

          console.log(elem)

          //condizione
          if (!this.arrayGeneri.includes(elem.tipo)) {
            this.arrayGeneri.push(elem.tipo);
          }

        })

      })
  },
  beforeUpdate() {

  },
  methods: {
    ricercaProdotti() {
      axios.get(`./api/index.php?tipo=${this.selectGenere}`)
      .then((res) => {
        this.arrayProdotti = res.data
      })
    }
  }
})
