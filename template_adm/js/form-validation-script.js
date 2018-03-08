var Script = function () {

  

    $().ready(function() {
        // validate the comment form when it is submitted
        $("#feedback_form").validate();

        // validate signup form on keyup and submit
        $("#register_form").validate({
            rules: {
                fullname: {
                    required: true,
                    minlength: 6
                },
                address: {
                    required: true,
                    minlength: 5
                },
                username: {
                    required: true,
                    minlength: 5
                },
                password: {
                    required: true,
                    minlength: 5,
                },
                email: {
                    required: true,
                    email: true
                },
                descricao:{
                  required:true,
                  minlength:10,
                },
                cargo:{
                  required:true,  
                },
                tel_col:{
                    required:true,
                    maxlength:15
                },
                exampleInputFile:{
                  required:true,  
                },
                titulo_bg:{
                    required:true,
                    minlength:5,
                },
                conteudo_bg:{
                    required:true,
                    minlength:5,
                    maxlength:900
                },
                file_bg:{
                    required:true,
                    accept:"image/*"
                },
                cat_bg:{
                    required:true,
                },
            },
            messages: {                
                fullname: {
                    required: "Digite um Nome Completo.",
                    minlength: "Seu nome completo deve conter pelo menos 6 caracteres."
                },
                address: {
                    required: "Selecione uma função para o colaborador.",
                    minlength: "A função deve ter no minimo 6 caracter."
                },
                username: {
                    required: "Digite uma formação acadêmica.",
                    minlength: "A formação acadêmica deve ter no minimo 6 caracter."
                },
                descricao: {
                    required: "Faça uma descrição da função do colaborador.",
                    minlength: "A descrição está muito curta ainda nova."
                },
                cargo:{
                    required:"Selecione um cargo por favor.",
                },
                tel_col:{
                    required:"Digite um número de telefone.",
                    maxlength:"Maximo 15 digitos neste campo."
                },
                exampleInputFile:{
                  required:"Selecione uma imagem por favor."  
                },
                titulo_bg:{
                    required:"Crie um titulo por favor.",
                    minlength:"Quantidade menor que 5 (cinco) não é permitido."
                },
                conteudo_bg:{
                    required:"Campo conteúdo é obrigatório.",
                    minlength:"Quantidade de caracter é muito curta",
                    maxlength:"Você já ultrapassou a quantidade maxima de caracter permitidos que é de 900." 
                },
                file_bg:{
                    required:"Selecione uma imagem para o post",
                    accept:"Imagem no formato inválido"
                },
                cat_bg:{
                    required:"Selecione uma categoria por gentileza",
                },
                email: "Por favor insira um endereço de e-mail válido."
            }
        });

        // propose username by combining first- and lastname
        $("#username").focus(function() {
            var firstname = $("#firstname").val();
            var lastname = $("#lastname").val();
            if(firstname && lastname && !this.value) {
                this.value = firstname + "." + lastname;
            }
        });

        //code to hide topic selection, disable for demo
        var newsletter = $("#newsletter");
        // newsletter topics are optional, hide at first
        var inital = newsletter.is(":checked");
        var topics = $("#newsletter_topics")[inital ? "removeClass" : "addClass"]("gray");
        var topicInputs = topics.find("input").attr("disabled", !inital);
        // show when newsletter is checked
        newsletter.click(function() {
            topics[this.checked ? "removeClass" : "addClass"]("gray");
            topicInputs.attr("disabled", !this.checked);
        });
    });


}();