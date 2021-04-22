import axios from "axios";

const options = {
  method: 'POST',
  url: 'https://simple-elegant-translation-service.p.rapidapi.com/translate',
  headers: {
    'content-type': 'application/json',
    'x-rapidapi-key': 'd214d616a8msh8bbf3053d960d26p178f7djsn76f7fc32f639',
    'x-rapidapi-host': 'simple-elegant-translation-service.p.rapidapi.com'
  },
  data: {
    text: 'نسخ الصوت العربي يمكن لانسان اكس نسخا من نص من كلام الى نقص في جميع انواع تنسيقات الصوت والفيديو تقريبا يمكن ان يصل حجم الملف الذي تحمله الى اربعة هو لغة وبيت في الحجم او اربعة ساعات وهو ما يمثل الكثير من الملفات الصوتية والمرئية يمكنك ببساطة تحميل ملف عبر جهاز الكومبيوتر الخاص بك او يمكنك محاولة التحميل من خلال دراسة باكس او وجود الدرايف يعملوا سونيكس مع تسجيلات صوتية مفردة بالاضافة الى تسجيلات متعددة المسارات يقوم سونيكس بتجميع تسجيلات متعددة المسارات في نص واحد ويسمح بوضع العلامات التلقائية على سماعات ان استخدام التسجيلات المسارات المتعددة يساعد على تحسين الدقة بشكل كبير لأن كل مكبر صوت معزول.'
  }
};

axios.request(options).then(function (response) {
	console.log(response.data);
}).catch(function (error) {
	console.error(error);
});