// https://api.telegram.org/1864096494:AAEDlZXsSUEaKmvgeFN7x1xEaNluPRdR7ac/sendMessage?chatId=-694034974&text=darovaKaban
const submit = document.querySelector(".submit-btn");

submit.addEventListener("click", (evt) => {
  evt.preventDefault();
  const form = document.forms[0];
  const text = `name: ${form[0].value}0x0ACar: ${form[1].value}`;
  console.log(text);
  sendSms(text);
});

const sendSms = (text) => {
  fetch(
    `https://api.telegram.org/bot1864096494:AAEDlZXsSUEaKmvgeFN7x1xEaNluPRdR7ac/sendMessage?chat_id=-694034974&text=${text}`
  );
};
