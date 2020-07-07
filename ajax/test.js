 let c=1
              for (let g in item['genero'] ) {
                console.log(item['genero'][g]['#text'])
                
                console.log((item['genero']).length)
               
                while(c < (item['genero']).length){
                  genero += `${item['genero'][g]['#text']} / `
                  c = c + 1
                  console.log(`o valor de c é ${c}`)
                } 
                if (c>= (item['genero']).length){
                  genero += `${item['genero'][g]['#text']}  `
                } 