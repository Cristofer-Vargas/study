<link rel="stylesheet" href="style.css">

# Modelo de caixa

É um conceito de "**box model**", agrande maioria dos elementos HTML são como caixas. Elas são *containers* que armazenam conteudos ou até mesmo outras caixas.

Temos alguns pontos que envolvem uma caixa, são eles: 

- o próprio conteúdo

  Fica dentro da caixa, "embrulhado" com padding

- `padding`

- `border`

- `outline`

- `margin`

Na ordem decrescente, cada elemento está *dentro* o sucessor, ou seja, a margin e a ultima propriedade que pode afastar o conteudo da caixa de outras caixas

As propriedades `Height` e `Width` são respectivamente altura e largura do CONTEUDO da caixa

> O outline é menos usado, mas é o contorno. Se criamos um traçado visual fica depois da borda e o calculo da sua espessura faz parte da margem estabelecida 

---

## Tipos de caixa

- Box-level

- inline-level

---

## Shorthadn

Exemplo da sequencia de uma shorthand

~~~css
h1 {
  border-width: 10px;
  border-style: solid;
  border-color: green;

  /* simplificando, na respectiva sequencia */
  border: 10px solid green;

  /* Tamanho, Estilo e Cor */
}
~~~

---

## Sombras nas caixas

### Ouset / Externa

~~~css
nav {
  box-shadow: 1px 1px 1px black;

  /* 
    Deslocamento Horizontal
    Deslocamento Vertical
    "Fumaceamento / Espalhamento"
    Cor da Sombra
  */

  box-shadow: 1px 1px 1px 1px black;

  /* 
    Deslocamento Horizontal
    Deslocamento Vertical
    "Blur / Esfumaçar"
    Spread / Distância
    Cor da Sombra
  */

}
~~~

### Inset / Interna

~~~css
nav {
  box-shadow: inset 1px 1px 1px 1px black;
}
~~~

> Uma dica: Evitar utilizar cores sólidas, dê preferência a cores com transparência

---

## Bordas Arredondadas

~~~css
.caixa {

  /* Mexe em todas as bordar, começando pela superior esquerda, no sentido horário */
  border-radius: 1px 1px 1px 1px;

  /* Mexe nas respectivas medida na diagonal. Superior esquedo e infeiror direito, Superior direito e inferior esquerdo */
  border-radius: 1px 1px;
}
~~~

---


## Boordas Desenhadas

<div style="display: flex; flex-wrap: wrap;">
  <div style="
  width: 100px;
  height: 100px;
  background-color: white;
  border: 5px solid green;
  margin: 10px;
  ">
  </div>
  <div style="
  width: 100px;
  height: 100px;
  background-color: white;
  border: 5px dashed green;
  margin: 10px;
  ">
  </div>
  <div style="
  width: 100px;
  height: 100px;
  background-color: white;
  border: 5px solid green;
  margin: 10px;
  ">
  </div>
  <div style="
  width: 100px;
  height: 100px;
  background-color: white;
  border: 5px solid green;
  margin: 10px;
  ">
  </div>
</div>