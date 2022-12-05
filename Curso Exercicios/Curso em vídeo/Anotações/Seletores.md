# Seletores

![Css selectors](https://programadoresdepre.com.br/wp-content/uploads/2022/10/css-seletores.jpg)

*Seletores são formas de selecionar elementos, classes e IDs do documento HTML*

*Seletores perssonalizados são métodos de organizar e ampliar a forma de interação com diversos elementos no documento*

<br>

---
<br>

- Seletor de ID



- Seletor de Classe

~~~html
<body>
  <h1 id="titulo-principal"> Aprenda Desenvolvimento Web</h1>
  
  <h1> Aprenda HTML </h1>
  
  <h2 class="topico"> Semântica Web </h2>
  <p class="texto"> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Debitis, nisi, error voluptatum deserunt expedita ipsa rem iusto illum sunt hic ad. Magni excepturi neque aliquid maiores tempore ea odio ipsa. </p>

  <h1> Aprenda CSS </h1>

  <h2 class="topico"> Estilos Web </h2>
  <p class="texto"> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Debitis, nisi, error voluptatum deserunt expedita ipsa rem iusto illum sunt hic ad. Magni excepturi neque aliquid maiores tempore ea odio ipsa. </p>
</body>
~~~

~~~css
#titulo-principal {
  background-color: darkgreen;
  color: white;
  text-align: center;
}

.topico {
  text-align: right;
}

.texto {
  text-align: justify;
}
~~~

> O estilos css respeitam propriedades de herança, podendo uma sobrescrever a outra, de acordo com a regra:
> - 1º lugar: CSS externo
> - 2º Lugar: CSS interno/loca
> - 3º Lugar: CSS inline
>
> Sendo assim, caso haja duplicidade nas configurações, o que fica valendo no final é a propriedade especificada nas configurações inine. Cada camada de aplicação de estilos vai adicionando propriedades novas e sobrescrevendo as configurações do nivel anterior.
