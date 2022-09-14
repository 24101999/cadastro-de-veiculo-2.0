const fechar = document.querySelector(".button-fechar")
const add = document.querySelector(".button-add")
const modal = document.querySelector(".back-modal-open")
const openModal = document.querySelector(".open-modal")
const veiculos = document.querySelector(".veiculos")
const veiculosall = document.querySelectorAll(".veiculos")
const detalhes = document.querySelector(".detalhes-info")
const edit = document.querySelector(".button-edit")
const inpmodal = document.querySelectorAll('.input-modal')
const select = document.querySelectorAll('.select')
const inputVeiculo = document.querySelector('.inp-for-edit-veiculo')
const inputAno = document.querySelector('.inp-for-edit-ano')
const inputDesc = document.querySelector('.inp-for-edit-desc')
const area = document.querySelector('.area')

// add.addEventListener("click", (bt) => {
//     inpmodal.forEach((inp) => {
//         if (inp == '' || area == '')
//             inp.placeholder = 'campo vazio'
//         area.placeholder = 'campo vazio'
//         bt.preventDefault()
//     })
// })

fechar.addEventListener("click", (button) => {
    modal.classList.remove('open')
})

openModal.addEventListener("click", (open) => {
    modal.classList.add('open')
})

const img = document.querySelector('.img')

fetch('http://localhost:1999/api.php')

// console.log(json(id))

.then((js) => {
        return js.json()

    })
    .then((data) => {
        list(data)
    })



const list = function(el, index) {
    el.forEach((elements, index) => {



        edit.addEventListener("click", () => {
            modal.classList.add('open')
            inpmodal.forEach((input) => {
                input.placeholder = 'test'
            })

        })


        // inputVeiculo.placeholder = `${el[index].veiculo}`
        // inputAno.placeholder = `${el[index].ano}`
        // inputDesc.placeholder = `${el[index].descricao}`

        veiculos.innerHTML += `<div class="info-veiculo">
            <div class="info">
            <p>${el[index].marca}</p>
            <p>${el[index].veiculo}</p>
            <p>${el[index].ano}</p>
            </div>
            <div class="links">
            <a href="http://localhost:1999/delete.php?id=${el[index].id}">
              <button type="button">delete</button>
            </a>
            <a href="http://localhost:1999/index.php?id=${el[index].id}">
              <button type="button">edit</button>
            </a>
            </div>
            </div>`



        select.forEach((sel) => {
            sel.innerHTML += `<option class="option" value="">${el[index].veiculo}</option>`
        })
    })

    const option = document.querySelectorAll(".option")


    // console.log(option)
    option.forEach((op, index) => {
            op.addEventListener("click", () => {
                detalhes.innerHTML = `
            <h3>${el[index].veiculo}</h3>   
             <div class="detalhes-name">
<div class="marca">
    <p>Marca</p>
    <p>${el[index].marca}</p>
</div>
<div class="ano">
    <p>Ano</p>
    <p>${el[index].ano}</p>
</div>
</div>
<p class="p-detalhes">${el[index].descricao}</p>
<div class="detalhes-line"></div>
<div class="edit">
<button><img src="img/mais.png" alt="" /> EDITAR</button>
<img src="img/local_offer_black_24dp.svg" alt="" />
</div>`
            })
        })
        // select.innerHTML



    const info = document.querySelectorAll(".info-veiculo")
    info.forEach((inf, index) => {
        inf.addEventListener("click", () => {
            detalhes.innerHTML = `
            <h3>${el[index].veiculo}</h3>   
             <div class="detalhes-name">
<div class="marca">
    <p>Marca</p>
    <p>${el[index].marca}</p>
</div>
<div class="ano">
    <p>Ano</p>
    <p>${el[index].ano}</p>
</div>
</div>
<p class="p-detalhes">${el[index].descricao}</p>
<div class="detalhes-line"></div>
<div class="edit">
<button><img src="img/mais.png" alt="" /> EDITAR</button>
<img src="img/local_offer_black_24dp.svg" alt="" />
</div>`
        })
    })
}