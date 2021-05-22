<template>
    <div class="w-100">
        <div class="card w-100 mb-3" v-for="i in 20" style="border-radius: 6px;">
            <div v-if="getRandomInt(0, 1)" class="card-body p-3">
                <i class="fas fa-exclamation-triangle text-danger mr-4"></i> Рекомендуется разгрузить участок с {{ getRandomInt(0, 20) }} по {{ getRandomInt(0, 20) }} км. ул. {{ streets[getRandomInt(0, 5)] }}. Путем {{ getRandomInt(2, 4) }} кратного увеличения времени работы светофора #{{ getRandomInt(1, 100) }}.   <span @click="changesd(i)" style="float: right;"><i class="fas fa-chevron-down"></i></span>
                <div v-show="flags[i]" class="mt-3">
                    <div class="row">
                        <div class="col-md-3">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2244.833615113757!2d37.60674265119244!3d55.76139249870191!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46b54a442d5f1aeb%3A0xbcfee1cace4a4039!2z0JzRjdGA0LjRjyDQnNC-0YHQutCy0Ys!5e0!3m2!1sru!2sru!4v1621645950306!5m2!1sru!2sru" style="border:0; max-width: 100%;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                        <div class="col-md-9">
                            <div class="alert alert-primary" role="alert">
                                На улице высокая средняя скорость, что организует заторы на пограничных участках пути.
                            </div>
                            <span>Средняя скорость - {{ getRandomInt(20, 80) }} км/ч.</span>
                        </div>
                    </div>
                </div>
            </div>
            <div v-else class="card-body p-3">
                <i class="fas fa-exclamation-triangle text-danger mr-4"></i> Рекомендуется нагрузить участок с {{ getRandomInt(0, 30) }} по {{ getRandomInt(0, 30) }} км. ул. {{ streets[getRandomInt(0, 5)] }}. Путем {{ getRandomInt(2, 4) }} кратного уменьшения времени работы светофора #{{ getRandomInt(1, 100) }}.   <span @click="changesd(i)" style="float: right;"><i class="fas fa-chevron-down"></i></span>
                <div v-show="flags[i]" class="mt-3">
                    <div class="row">
                        <div class="col-md-3">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2244.833615113757!2d37.60674265119244!3d55.76139249870191!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46b54a442d5f1aeb%3A0xbcfee1cace4a4039!2z0JzRjdGA0LjRjyDQnNC-0YHQutCy0Ys!5e0!3m2!1sru!2sru!4v1621645950306!5m2!1sru!2sru" style="border:0; max-width: 100%;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                        <div class="col-md-9">
                            <div class="alert alert-primary" role="alert">
                                На улице высокая средняя скорость, что организует заторы на пограничных участках пути.
                            </div>
                            <span>Средняя скорость - {{ getRandomInt(20, 80) }} км/ч.</span>
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
                flags: {
                    1: 0,
                    2: 0,
                    3: 0,
                    4: 0,
                    5: 0,
                    6: 0,
                    7: 0,
                    8: 0,
                    9: 0,
                    10: 0,
                    11: 0,
                    12: 0,
                    13: 0,
                    14: 0,
                    15: 0,
                    16: 0,
                    17: 0,
                    18: 0,
                    19: 0,
                    20: 0,
                },
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



    