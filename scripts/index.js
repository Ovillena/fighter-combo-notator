// $(document).ready(()=>{
//   $("aside.notation-buttons button").on("click", function (event)=>{

//   })
// })

$(document).ready(() => {
  $("button").on("click", function (event) {
    event.preventDefault();
    let input = $(this).attr("value");

    $(".notation-list").append(
      `<li><button class='input'>${input}</button></li>`
    );
  });
});
