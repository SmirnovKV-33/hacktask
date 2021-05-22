<template>
    <div class="w-100">
        <div v-for="i in 20" class="card w-100 mb-4" style="border-radius: 6px;">
            <div class="card-body">
                <h4>Сенсор №{{ getRandomInt(100000, 999999) }}, ул. {{ streets[getRandomInt(0, 5)] }}</h4>       
                <label class="mb-2">Изношенность сенсора</label>
                <div class="progress">
                    <div class="progress-bar" role="progressbar" :style="{'width': getRandomInt(0, 100) + '%'}" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <label class="my-2">Процент работающих датчиков</label>
                <div class="progress">
                    <div class="progress-bar" role="progressbar" :style="{'width': getRandomInt(0, 100) + '%'}" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
    export default {
        data: function () {
            return {
                numberid: "",
                streets: [
                    'Ивановская', 'Ваньчева', 'Охотный ряд', 'Петровка', 'Неглинная', 'Никольская'
                ],
            }
        },

        methods: {
     
            getRandomArbitrary: function(min, max) {
                return Math.random() * (max - min) + min;
            },
            
            getRandomInt: function(min, max) {
                min = Math.ceil(min);
                max = Math.floor(max);
                return Math.floor(Math.random() * (max - min + 1)) + min;
            },
        }
      
    }
</script>



    