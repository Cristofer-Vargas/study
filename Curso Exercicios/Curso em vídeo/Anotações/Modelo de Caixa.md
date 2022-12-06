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