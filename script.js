   const button = document.getElementById("clickme");
                const image = document.getElementById("image");

                button.addEventListener('click', () => {
                    const imageActive = document.getElementById("image");
                    
                    if (imageActive){
                             imageActive.remove(); 
                    } else {
                        const imageContainer = document.getElementById("image-container");

                       

                        imageContainer.appendChild(image);
                    }   
                });