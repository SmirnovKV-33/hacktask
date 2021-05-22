<template>
    <div class="card w-100 p-0" style="border-radius: 6px;">
        <div class="card-body p-0">
            <div style="position:relative;overflow:hidden;"><a href="https://yandex.ru/maps/213/moscow/?utm_medium=mapframe&utm_source=maps" style="color:#eee;font-size:12px;position:absolute;top:0px;">Москва</a><a href="https://yandex.ru/maps/213/moscow/?l=trf&ll=37.536202%2C55.698466&utm_medium=mapframe&utm_source=maps&z=14.97" style="color:#eee;font-size:12px;position:absolute;top:14px;">Яндекс.Карты</a><iframe src="https://yandex.ru/map-widget/v1/-/CCU4vPr8DB" frameborder="1" allowfullscreen="true" style="position: relative; width: 100%; height: 600px;"></iframe></div>        
        </div>
    </div>
</template>
<script>
    export default {
        data: function () {
            return {
                numberid: "",
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



    