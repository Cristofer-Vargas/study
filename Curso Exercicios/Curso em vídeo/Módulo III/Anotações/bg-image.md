<link rel="stylesheet" href="style.css">

# Background-image

Propriedades do `background-image` em html e css

Bakcground-Size:

~~~css
auto - /*(Padrão) a imagem de fundo será aplicada em seu tamanho original.*/

[length] px - /*Redimensiona a largura da imagem e faz a altura se adaptar automaticamente.*/

[length] % - /*Podemos tamem informar as duas dimensões na sequência ou tambem usar valores percentuais*/

cover - /* Muda o tamanho da imagem para que ela seja sempre totalmente exibida na tela, sem nenhum corte. */

contain - /* Redimensiona a imagem para que ela ssubra o contâiner, mesmo que para isso ocorram alguns eventuais cortes. */
~~~

background-attachment

~~~css
scroll - /* (Padrão) a imagem de fundo vai rolar junto com o conteúdo */

fixed - /* A imagem de fundo vai ficar fixada enquanto o conteúdo vai sendo rolado. */
~~~

---

## Para Simplificar

As propriedades

`Background-color: back;`
`Background-image: url('image.png');`
`Background-position: center center;`
`Background-repeat: no-repeat;`
`Background-attachment: fixed;`

pode ser simplificadas com shorthand

~~~css
body {
  background: black url('image.png') center center no-repeat fixed;
}
~~~