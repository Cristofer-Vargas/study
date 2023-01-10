<link rel="stylesheet" href="style.css">

# Media Query

*De grosso modo, media queries servem para adaptar formato do site com outras telas ou proporções, tipo impressão em papel ou sites para celular*

> Media Queries são Media Types + Media Features

![Media Queries](https://i0.wp.com/www.silocreativo.com/en/wp-content/uploads/2016/12/media-query-css.png?resize=666%2C500&quality=100&strip=all&ssl=1)

## Media Types

~~~html
<link rel="stylesheet" href="tela.css" media="screen">
<link rel="stylesheet" href="impress.css" media="print">
~~~

Até agora visto, há esses dois media types, que aderem folhas de estilos diferente para cada `tipo de media`. Uma serve para `screen`, ou seja, telas no geral, e outro definida para impressão em papel por exemplo

também há o media type `media="all"` que abordar todo e qualquer tipo de media. Excenssial pra usar como base antes de definir prioridades pra cada tipo em especifico

## Media Features

Define caracteristica de uma media type. Por exemplo, uma caracteristica de tela

~~~html
<link rel="stylesheet" href="style/retrato.css" media="screen and (orientation: portrait)">
<link rel="stylesheet" href="style/paisagem.css" media="screen and (orientation: landscape)">

<!-- Define uma folha de estilo para medias de tela com media features de orientation: portrait, ou retrato e orientation: landscape, ou paisagem -->
~~~
