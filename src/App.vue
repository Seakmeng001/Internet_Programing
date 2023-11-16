<!-- print hello world -->
<template>
  <div class="container">
    <div class="cart_promotion">
      <div v-for="item in cart" :key="item.Img" class="card_conatainer">
        <Cart
          :bgColor="item.bgColor"
          :Img="item.Img"
          :Title="item.Title"
          :Item="item.Item"
        />
      </div>
    </div>

    <div class="promotion_container">
      <div v-for="item in promotion" :key="item.Img" class="container_promotion">
        <AddVertise
          :bgColor="item.bgColor"
          :heanding="item.heanding"
          :textBtn="item.textBtn"
          :colorBtn="item.colorBtn"
          :Img="item.Img"
        />
      </div>
    </div>
  </div>
</template>

<script>

import MyButton from './components/MyButton.vue';
import Cart from './components/Cart.vue';
import AddVertise from './components/Addvertise.vue';

  export default {
    name: 'App',
    components: {
      MyButton,
      Cart,
      AddVertise,
    },

    data(){
      return{
        promotion: [
          {
            bgColor: "#F0E8D5",
            heanding: "Everyday Fresh & Clean with Our Products",
            textBtn: "Show Now",
            colorBtn: "#3BB77E",
            Img: "https://s3-alpha-sig.figma.com/img/4161/319a/43897a24803e9e70f7a3c07a150bdd8b?Expires=1699833600&Signature=aQp-BxBbHWxaU3ueu34fYtcxKNQDm9ITgJNIyRU0aN0RLNUW5cunXtEBr1Puo-L1zgvH1IbSdWUjZNQiPkcYp4y~sTRkTnsftwrPyInaWhaYZTTdsMNMuHPGVlRZLQePWnXHnnsbgX3xl9MqS8qLyAAgu1kT4KSPE5~DG7aGxZJgS7IlqtizYkYP~B7lag~v4Cp~z4CfdEJweIRdl5GD9FtgdvAsC4v30WyaP16r-~Kt4e6ZMLprQhK3~2GJZpW7eaaAbzVphcQgwrhP9HLCwdV3KI3VeSDb3DQ7oWhtg4HnKnNZiRqimenVtb3b8WYqMgVIvpRUKXz14qnPNoI12A__&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4"
          },
          {
            bgColor: "#F3E8E8",
            heanding: "Make your Breakfast Healthy and Easy",
            textBtn: "Show Now",
            colorBtn: "#3BB77E",
            Img: "https://s3-alpha-sig.figma.com/img/2738/f29f/1c4542246febe8c91ddb74ce42b81c5d?Expires=1699833600&Signature=JNM~Pf22QsnaqWM9RZvWG64rjJo-lwfl9CDQ92UKMr6C28gHlbdnOOztzCIiPSRH0g5qkVqbTgGQdrEMyPelGVWQddeCtybMyNUd65D4~cPXAB07xITVuyQVMRet1JACTy8dCeWb8T9iQmnqVt0YR2uHQWVulaiHJnCwld~CzjbFEs1IyFxhYvreRlGm2iD0vuqOAHgHTfEy0EIUnd1CjWkmc8EZtD4X2HlZsQ2~jLP4m~D6OfzE7ep1TEnDlV6DY-dV1rLk2K1XVxF13VbfgrM-Bpo10mw0Dsf2eLV-7UlbFfJhzRPEBW7ZKd23-YWQ-pglVOnpWEJtXuTNrvYUFA__&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4"
          },
          {
            bgColor: "#F3E8E8",
            heanding: "Make your Breakfast Healthy and Easy",
            textBtn: "Show Now",
            colorBtn: "#FDC040",
            Img: "https://s3-alpha-sig.figma.com/img/2054/d943/5d3d3db99819f3269bcfad856332b12c?Expires=1699833600&Signature=JgamAf6Jjl7NbN1sqEgZGbhVKWu-VxmbFLKANhp9paUWWMvZfBcvnqPFD2ZQpVJM8jGipHP7~fMbHSPwQZ1A5dEWnX8FdLB1QdPlnteL7yy57EzGTc7ky4PagPGtUHf9OrNsA3WbBseuwBmjByiG38wqOBAef77azTkQxess0PSp4phzfEcn4cx16CI0Kev-0ojWLCPsZJ~LeNh1bpvxHxy-gXrURc8Bz5otDvoYd-1R2ZbERCVwLvqARPXtNzbSgUGpJDhHhMhAJcyrZ-ug9dXZlJqUTaK9CQH4sKDFkhZaUrra~erAq2vuxSD8XKRS5eIbIk7hB1z4T3WltFooow__&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4"
          }
        ],
        cart: [
          {
            bgColor: "#F2FCE4",
            Img: "https://s3-alpha-sig.figma.com/img/8370/e915/8a586f746c0b10b70cd405c8aa1f2038?Expires=1699833600&Signature=TQRrNFrsGB3Wl0DWirVW8C5sZqpXz-oM5D8vyvcnGdXMnkCj-mvjJW9iGpGlcYIWiZCjrGeCSjLGTjXB73l-WsNy6B4LR3gGyBckdaFv7DzWCc0LMbcDJpMUh0PwGOxymQEQrxNvah6qoDYYdPGhi3MCkCb-rZq5U1Nw6BvGrn58zCEcyPtqRljbLM~vztpm33OdUi6XBzUpscXCplwlwecgIT6-F5EK1W2Wyiit3JheygBbDFPe60mys~b3WwthjTU52fDJUssK-KT7Mnj6PqVe0JC3j7AoPnRWcaQC7di~~tfy8p8~8UHJ8o2g31Je0mDSqnbg9YHTHBGrLAFRuA__&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4",
            Title: "Cake & Milk",
            Item: "14 items"
          },
          {
            bgColor: "#FFFCEB",
            Img: "https://s3-alpha-sig.figma.com/img/fa19/6bce/6720167ebdfcf5d3f8a2d76053176f9a?Expires=1699833600&Signature=ReB-ACp4ZHwx-KnKawaftMI0r-4wHOzgkuQNvDz4gKr3pbU1DOV9wPzqVzD5xoIQky3NmxOgpyvHqgOf30GqOVYVTGqZ-fCf-GpU3a~qX6WyKTMC~J203nZHFVOPIlOKLkMv4p5uvu8GDKuiykrSKXm1pvM9gpltD6Rqi2-cv5qr3lFjfEPv4jy~5N8YXifYLUysVejDLfchKgSV8XqmwM4kBy2dYX97IbiXpXLKFd0meAuo41mKtF2zlnclc2I8boDAHrCvYz6SjNSr4GQgaXUeJVGX52NaqJ-5a6fQYDj6jVc7hPmNaryj7S4cwYB-tl2zT41u6sThXxLx-AsS1g__&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4",
            Title: "Peach",
            Item: "17 items"
          },
          {
            bgColor: "#ECFFEC",
            Img: "https://s3-alpha-sig.figma.com/img/eb0a/46d6/bf3d30616b8cd69f4b03064fe254350c?Expires=1699833600&Signature=SVfj1ycsGcreHWOHTDYE7MakOwpk5lkKmu8TeP5AllFZB~RXeF3wduHLgtaBGjhQk~czlgDCh4yMXzttdFfSL19X0CDpGrMghsOsQd1cSUPSTwjcOh1BQgQF6qX7cj7wNsU4FYeQ8so92HtjVdm1mVcHvtxfjYntQlds7TB9eW9ZQJoKag~TWM6ocQBITJLLyKCivxYp2wgPSFCkriZnXiMXSUzSP2pTU3ynv4a9T7c6tgwax3s5tiXKx-gRKAkl3mdPpHa0qmxx8Gb-K0ksLWvzS4GRMfFnZw5SVCAiumSjvPfjPIhr3V~X6uzbw2qNyEaHuwM~4hXmEbZDneXykw__&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4",
            Title: "Oganic Kiwi",
            Item: "21 items"
          },
          {
            bgColor: "#FEEFEA",
            Img: "https://s3-alpha-sig.figma.com/img/21b6/3a1e/f2a493eea176934bcab372692ab59a29?Expires=1699833600&Signature=FXFbsYqphIe1ipmFbHzTdjwe6oAZguBImTgw3rut6pjQxCr~gU~UdJYlygCK5Qh56~R38QKQxELvFkZW4tEvDcHH99ugN7vqkTTSnRqHi6YnsOGXCb01GQJHNqlwgC7P90-6VapunM6IlmDdcyMfh5LmOLdEDHyKx0nZct89zq1WlsOzSrxWqwWrhAvo3R5nQimGDSmCg5C7hdzeIYzGnYv9sQhZ4EF0HePgUbeoj8fNMiWbRX~h655bMFr8cVIXdVrJ7BEwE6B~EvVjYtrYC6T0sRaoGJGFcgpFY92t164x-LR6lVWmXPyU5cm7UgT425rOlQhe~vn20wdtZIRc4w__&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4",
            Title: "Red Apple",
            Item: "68 items"
          },
          {
            bgColor: "#FFF3EB",
            Img: "https://s3-alpha-sig.figma.com/img/488c/b40d/98f6efd89c2347f8ab7f23b7757a7e2f?Expires=1699833600&Signature=RRKQtVEpA~7vCDr5cobXciLHTNELEC9v-hZDzZEj0rivcS~pgZaCrvu1lo-UJtaNgCqenuo-Fi7ZzxvFgNlUMAMdgeAT1eIkdyjO6aT-gV7wk-HV-b1TAf7XrcJE1aCiTp9gY8bz3pEnf6XKkqM6oSovCP4I~jBeCRJnRSrF49RpJBwhnfR5r-ixEwybyIxKc2WZ0ExyqatE-MpsfRMLXdh8jqmxwb64b1rRpH4GOlPvg0u2dgZlOud2DgBhKl1y6lW6i6sQ2UxtN2~m2Cf0aHvwuGHJ7anev1jDsIFLnDQg4w5iPTXnWRM7tTp1KpU0-3weVligqoHLjmAGV1kJBg__&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4",
            Title: "Snack",
            Item: "34 items"
          },
          {
            bgColor: "#FFF3FF",
            Img: "https://s3-alpha-sig.figma.com/img/13f9/afc8/02816b515e817bcd88800c49b947f860?Expires=1699833600&Signature=YL1P41RPODYUqlRbRpFI7l5JafECERaPx7-jTsgY8LM-c-9bolTqwRx1J54YiYXXPlutJdIpZF4Nu~LKICq8khhHghdVH3unGdqcrj35Gny2QdsJC78L8UAZRHJ3eKzOJL-vopTA72V6FXAcf9PJLneQ78KPP72R~HywsPeLTlwxFzj5pZjTI-yeU1zDM~XwO9pTOebx5YDaLH9lQnGXR7PFw5CB79R9JqOzFpriNecpgrQNBIHGbtqo~XF8ENarO5s3~RJlXIUDuAEQkcPky-zwRsrngemqWzf1juegho4RXk3DcvOxhQFH7yQ~spK1El71NtKcAdzV0cSiZjlBEQ__&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4",
            Title: "Black plum",
            Item: "25 items"
          },
          {
            bgColor: "#F2FCE4",
            Img: "https://s3-alpha-sig.figma.com/img/5e6d/35bc/cc6f73e5412576546dca6b013f4fc9c7?Expires=1699833600&Signature=J5bhwwHy-8EhZxf~pW2L9qcDo4RLXcvYDPCdDmOyBY~C3BUWWIc5Wn4KUAtXk2biIeJaZj~Dt0epPcSGz4Rgwcg2AkDQ65CYDztMsj9NKscS40nQVqoIQwIhYSufQdv8zkHFQYJ5htdr3ceMLGwdDyH~qe83FC40J~TtkcPJxjPfAQE8XnbrUox5ER0gS5ndWF02rxHBhdgKz~~HKAxzqmL-oRc1iDDD6VZj3ZFTnamSfk5PdeuhnAFCPRy6uvzZr2xiRSRyGjYsxbqv9gJS0UoUhfgfp3HCZ~smR-dQhoA2Ide4gpWwkzKAJdyb8gUg3ER7yj0joHqU7sklQzrWUg__&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4",
            Title: "Vegetable",
            Item: "65 items"
          },
          {
            bgColor: "#FFFCEB",
            Img: "https://s3-alpha-sig.figma.com/img/0ed9/44fa/3bcccc269ae2cadb2fb25ac9b02ea29e?Expires=1699833600&Signature=JpBVjKtSL-91DazsiQO3MgkyvztdmXjSbYG51BReJcHZnW4KQ-BvsNH0KbpvM2K5KrpTPStIe~tLSVmAsmTKQqceGy4tMDiI8~tdkYHulh5vJmOgLLa3IAq~YB-ZffrX-0Wc2cI1twiQzjVGVhik5Hz1EYRuE4xAbzUdW5CFeiK9qN3NtJ9xpuAmJXOsUmUjgTtFYWcorjfpCKmVUkI-g7fwheaQZf8egCO8eaedzshVmprQw2D9KZWpvikTvkOeKg8zZezcDsCxbQ~K~AICT-Xp9dtb8-sTXzkHV0ckb~fEvd6QxbhYBYoVqU9Zs9aO-vdpwiG0QpmZZZLCkpAtDQ__&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4",
            Title: "Headphone",
            Item: "33 items"
          },
          {
            bgColor: "#F2FCE4",
            Img: "https://s3-alpha-sig.figma.com/img/78c4/8886/688817c7c490b88407c4904743141184?Expires=1699833600&Signature=pg4YVVgnJVPU82pFrb5TZqIW86nanB5A2pL2q9iEpqZ8b99ZlW7MxslUGQ0DlGXb-7zRkzEbXgCj-~d-tTYqx5-QqQmg3iXAwjEv5ckj25lnw~mpt2k3X7eFwGUQo42XHSWKNeE1X3hCZOXH0BZAoxIz-Ks8lAJeZ7cLBZEH6xyVYxfQBxoR88F2A8c0BBLPjFgDzZxV0Rsbl4GMm8MYReGby0Z6MJFTHZqNhI4Y0o8cC0fUvN8RuWpvxdPr~mPMufJwPb4U9MeQusBPxo7tiExuix-HvpMNP7fzIAqtJzMIFKqF32trLoWTXFW99G0k-TuVIdRJdJehZIb9ISBbtQ__&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4",
            Title: "Cake & Milk",
            Item: "54 items"
          },
          {
            bgColor: "#FFF3FF",
            Img: "https://s3-alpha-sig.figma.com/img/aadc/a20d/2ca905cbdfec3bf306fbe70e1ca34a8a?Expires=1699833600&Signature=UdhxWsqWNaFPVYRQR2BywbacMhq8bf1IKHxb9JMgBGKERxpzcPVzDRfozFq2CHgeR62jUwhPApqUiNlRxTrK-p9xFYxLUJEnCBUK~KZefSygBebL~AU-~BJ7njpLqN4UAmwIN~sCH5ugWqUUfP2HRdENjAEFzCqdG9XfWyGCwinAoSs4Nlky8wPdWo2YFTgw~H0jKvF4axGlNJvj2awW4-7t2F6OMUaoo3bNdmnlJvOmNVChiXOPrx1x7W~46GwXlUGsrsHYdW4JWrpLRuwKOC1gFW72hPaj~yITFMn5k3GGsDRBEpo5Uc9KKRwm2IilvuJ-Eo-uok4WmwouNwxPuw__&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4",
            Title: "Orange",
            Item: "63 items"
          }
        ]
      }
    }
  };

</script>

<style scoped>
.promotion_container{
  display: flex;
  flex-direction: row;
  justify-content: space-between;
  align-items: center;
  margin-top: 20px;
}

.container_promotion {
  margin-left: 10px;
}

.cart_promotion{
  display: flex;
  flex-direction: row;
}

.card_conatainer {
  margin-left: 10px;
}
</style>