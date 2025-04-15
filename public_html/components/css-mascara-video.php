<!-- Estilos que se insertan para conformar la máscara de video -->

<style> 
                  * {
                    padding: 0;
                    margin: 0;
                    overflow: hidden;
                    }
                    
                    body, html {
                      height: 100%;
                    }
                    
                    svg {
                      position: absolute;
                      width: 100%;
                      top: 0;
                      bottom: 0;
                      margin: auto;
                    }
                    
                    img{
                      position: absolute;
                      border-radius: 5px;
                      line-height: 0;


                    }

                    svg {
                      filter: drop-shadow(1px 1px 10px hsl(206.5, 70.7%, 8%));
                      transition: all 250ms ease-in-out;
                    }
                    
                    body:hover svg {
                      filter: drop-shadow(1px 1px 10px hsl(206.5, 0%, 10%));
                      transform: scale(1.2);
                    }
                    </style>