<link rel="stylesheet" href="style.css">

<style>
  /* h1 {
    color: red;
  }

  h2 {
    color: green;
  } */
</style>

# iFrames

*Frame Inline - iFrame (Quadro em linha (Tradução Livre))*

![iFrame Image](https://www.makingdifferent.com/wp-content/uploads/2013/03/HTML-iframe.jpg)

---

Este é um teste <iframe></iframe> de Frame Inline

iFrames são `display: iline-block`

iFrames são Janelas incorporadas em nosso site, seja de conteudo / site de terceiros ou arquivos hospedados localmente

Por padrão o iFrame sugere os seguintes atributos para a tag


~~~html
<iframe src="" frameborder="0">

</iframe>

<!-- src é o caminho do arquivo / site -->
<!-- frameborder é a borda da janela, 0 é invisivel ou nenhuma borda, e 1 é a borda aplicada a janela -->
~~~

---

## Compatibilidade

Nem todos os navegadores de celular possuem suporte ao iFrame, e assim sendo, você pode optar por apresentar uma menssagem quando o navegador não conseguir apresentar o iFrame

~~~html
<iframe src="" frameborder="0">
  Menssagem que irá aparecer no navegador quando não houver suporte ou não for possivel apresentar o iFrame
</iframe>

<!-- A melhor maneira, e/ou a mais interessante é colocar o link da pagina caso não for possivel mostrar o iFrame -->

<iframe src="https:// www.link.com.br" frameborder="0">
  <a href="https:// www.link.com.br">Link</a>
</iframe>
~~~

---

## Tamanho do iFrame

Por padrão o iFrame possui `width: 300px` e um `height: 150px`

o iFrame possui um atributo / parâmetro para width e height (Não muito recomendavel ou usual pois existe o css para mudar o estilo)

~~~html
<iframe src="https:// www.link.com.br" frameborder="0" width="500px" height="500px">
  
</iframe>
~~~

> [IMPORTANTE] Os atributos de `width` e `height` diretos na tag são inferiores na hierarquia, ou seja, se houver um seletor no css que por propriedade mude esse valor, será válido o css

---

## Título do iFrame

A tag iFrame também possui o atributo de `title` que define um titulo para o quadro iFrame, e ajuda a leitores de tela sobre qual conteudo ou o que é aquele iFrame

~~~html
<iframe src="https:// www.link.com.br" frameborder="0" title="Titulo do iframe link">
  
</iframe>
~~~

---

## iFrame - Alvo para um link

Podemos fazer com que o iFrame seja alvo de um link e que esse link possa redirecionar para o caminho do iFrame. Isso possibilita que o conteudo alvo do link abra no iFrame (quando se tem o name do iFrame como alvo)

~~~html
<iframe src="" name="iframe_a" title="Iframe Example"></iframe>

<p><a href="https:// www.link.com" target="iframe_a">W3Schools.com</a></p>
~~~

---

## Conteúdo Estático

É possivel utilizar de um parametro no iFrame para que seja exibido um código em HTML  estático quando carregar o iFrame

~~~html
<iframe 
srcdoc="

<h1>Escolha uma opção para carregar no iFrame</h1>

<p>
  Quis necessitatibus accusantium, sunt a quaerat, quos sit error reprehenderit illum ex officiis ratione autem eaque voluptas! Unde debitis voluptatibus recusandae pariatur culpa neque architecto hic rerum vel! Laborum, voluptatum!
</p>

" name="iframe_a" title="Iframe Example">

</iframe>
~~~

---

# Incovenientes do **iFrame**

Casos não recomendáveis ou indesejáveis o seu uso

---

## Indexação dos conteúdos do Iframe

O mecanismo de busca do Google (Google bot), pode eventualmente não descobrir e não indexar sua pagina se ele não descobrir os conteúdo dentro dos iFrames (Eventualmente ou / pode ser que aconteça, mas não é garantido)

Mantenha seu conteúdo principal ou que seja de relevância para a indexação da página, o máximo que der, se possivel, fora de iFrames, pois pode ser que ocorra esse eventual "Problema" e seu site pode não ser muito bem indexado

---

## Problemas de Acessibilidade

É possivel e bem provavel que softwares leitores de telas por exemplo, não consigam usufuir corretamente do conteudo do iFrame, podendo não apresentar sua real função

---

## Problemas de Usabilidade

Problemas de usabilidade podem ser muito por parte da interpretação do navegador, ou por problemas que até o usuário pode enfrentar consumindo/usando iFrames

- Problemas de navegãode janelas

É possivel que o navegador não interprete muito bem a necessidade voltar, como na janela do iFrame ou se é na janela atual do navegador

Abrir uma nova janela tambem pode ser um problema, pois o navegador pode interpretar errado a necessidade de abrir uma nova janela no iFrame ou na janela do navegador

- Responsividade do site no seu site

- Cuidados com o site que formos "abrir essa porta"

---

# Iframes mais seguros

## Não permitir a captura de dados

Há uma propriedade no iframe que é assim: `sandbox="sandbox"` que não permite que dados sejam registrados ou interpretados do site dentro do iframe. Muito útilo para possiveis e eventuais cadastros e verbos http

O atributo `sandbox=""` também aceita outros valores, o valor sandbox é tipo "máxima segurança" e proibe qualquer "passagem de dados" do site / ou pagina embutido(a). Há valores tambem como `allow-same-origin` que permite apenas de arquivos de mesma origin (se o arquivo estiver na "mesma pasta" que o html)

~~~html
<iframe src="" sandbox="allow-same-origin allow-forms allow-scripts" referrerpolicy="no-referrer">

  <!-- Este ifram por exemplo, consecutivamentes está 
  permitindo da mesma 
  origem: 
  formulários e scripts. 
  
  E também esta bloqueando o acesso a suas informações para o site embutido -->
</iframe>
~~~

Há tambem um atributo: `referrerpolicy="no-referrer"` que ajuda a não utilizar referencias suas (eu assemelho com os cockies que são informações suas que o navegador possui) para o iframe ou o site embutido no iframe em questão