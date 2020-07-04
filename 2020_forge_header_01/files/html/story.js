wassup = () => {
  alert('哈哈,就是不告诉你flag是什么,想办法绕过我吧');return;
  $.ajax({
    type: "POST",
    url: "backend.php",
    data: {"gxxd_auth":"0xdeadbeef"},
    success: function(data) {
      alert(data);
    }
  });
}

