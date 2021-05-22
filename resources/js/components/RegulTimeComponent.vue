<template>
    <div class="w-100">
        <div class="card w-100 mb-3" v-for="i in 20" style="border-radius: 6px;">
            <div class="card-body p-3">
                <div class="row">
                    <div class="col-md-3">
                        <img style="width: 100%;" src="https://caoinform.moscow/wp-content/uploads/sites/38/2018/09/u3JFU_cq4X1n9.jpg">
                    </div>
                    <div class="col-md-9">
                        <h4>Светофор #{{ getRandomInt(0, 200) }} ул. {{ streets[getRandomInt(0, 5)] }}</h4>
                        <div class="row">
                            <div class="col">
                                <label for="inputPassword5" class="form-label">Рекомендуемое время*</label>
                                <input type="text" disabled id="inputPassword5" class="form-control" :value="getRandomInt(2, 6)*10" aria-describedby="passwordHelpBlock">
                                <button type="button" class="btn mt-3 w-100 btn-block btn-primary">Установить</button>
                            </div>
                            
                            <div class="col">
                                <label for="inputPassword5" class="form-label">Время фазы время 1</label>
                                <input type="text" id="inputPassword5" class="form-control" :value="getRandomInt(0, 6)*10" aria-describedby="passwordHelpBlock">
                                <button type="button" class="btn mt-3 w-100 btn-block btn-primary">Сохранить</button>
                            </div>
                            <div class="col">
                                <label for="inputPassword5" class="form-label">Время фазы время 2</label>
                                <input type="text" id="inputPassword5" class="form-control" :value="getRandomInt(0, 6)*10" aria-describedby="passwordHelpBlock">
                                <button type="button" class="btn mt-3 w-100 btn-block btn-primary">Сохранить</button>
                            </div>
                            <div class="col" v-if="getRandomInt(0,1)">
                                <label for="inputPassword5" class="form-label">Время фазы время 3</label>
                                <input type="text" id="inputPassword5" class="form-control" :value="getRandomInt(0, 6)*10" aria-describedby="passwordHelpBlock">
                                <button type="button" class="btn mt-3 w-100 btn-block btn-primary">Сохранить</button>
                            </div>
                        
                            <small class="mt-2"><p>* Аналитическое время рекомендуемое алгоритмами.</p></small>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
    export default {
      mounted(){
          
      },
      data: function () {
            return {
                data: 0,
                flags: [0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],
                streets: [
                    'Ивановская', 'Ваньчева', 'Охотный ряд', 'Петровка', 'Неглинная', 'Никольская'
                ],
            }
        },

        methods: {
            changesd: function(i){
                if(this.flags[i] == 0){
                    this.flags[i] = true;
                }else{
                    this.flags[i] = false;
                }
            },
            getRandomInt: function(min, max) {
                min = Math.ceil(min);
                max = Math.floor(max);
                return Math.floor(Math.random() * (max - min + 1)) + min;
            },
        }
      
    }
</script>



    