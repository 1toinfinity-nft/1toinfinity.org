<template>
    <Layout>
        <section id="about" class="py-12">
            <div class="container max-w-5xl mx-auto">
                <div class="grid grid-cols-3 gap-12 items-center">
                    <div>
                        <img
                            class="h-30 w-full rounded-xl object-cover"
                            :src="PlaceholderNft"
                            alt="1 to infinity logo"
                        />
                    </div>
                    <div class="col-span-2">
                        <h1 class="text-4xl font-bold text-primary-light">
                            About
                        </h1>
                        <p class="text-justify text-lg">
                            Lorem ipsum dolor sit, amet consectetur adipisicing
                            elit. Esse itaque libero praesentium autem, atque
                            corrupti explicabo voluptatum neque adipisci. Minima
                            nostrum voluptas quas! Fugit maiores aperiam,
                            numquam tempore sint ratione distinctio molestiae
                            illo asperiores est, inventore, modi reiciendis
                            totam explicabo. Lorem ipsum dolor sit amet
                            consectetur adipisicing elit. Odio aspernatur neque
                            voluptatibus et quas ab a dolore beatae facere
                            impedit. Deleniti nesciunt corrupti architecto
                            eaque, veritatis aspernatur harum soluta est earum
                            odio alias. Maxime nesciunt laudantium consequuntur
                            neque rerum labore.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section id="why-started" class="py-12 bg-primary md:py-40">
            <div class="container max-w-5xl mx-auto">
                <h1 class="text-4xl font-bold text-center text-primary-light mb-12">
                    Why 1 to infinity
                </h1>
                <p class="text-justify text-lg">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                    Esse itaque libero praesentium autem, atque corrupti
                    explicabo voluptatum neque adipisci. Minima nostrum voluptas
                    quas! Fugit maiores aperiam, numquam tempore sint ratione
                    distinctio molestiae illo asperiores est, inventore, modi
                    reiciendis totam explicabo. Lorem ipsum dolor sit amet
                    consectetur adipisicing elit. Odio aspernatur neque
                    voluptatibus et quas ab a dolore beatae facere impedit.
                    Deleniti nesciunt corrupti architecto eaque, veritatis
                    aspernatur harum soluta est earum odio alias. Maxime
                    nesciunt laudantium consequuntur neque rerum labore.
                </p>
            </div>
        </section>
        <section id="why-started" class="py-12 md:py-40">
            <div class="container max-w-5xl mx-auto">
                <div class="grid grid-cols-3 gap-12 items-center">
                    <div class="order-last">
                        <img
                            class="h-30 w-full rounded-xl object-cover"
                            :src="PlaceholderNft"
                            alt="1 to infinity logo"
                        />
                    </div>
                    <div class="col-span-2">
                        <h1 class="text-4xl font-bold text-primary-light">
                            Creator
                        </h1>
                        <p class="text-justify text-lg">
                            Lorem ipsum dolor sit, amet consectetur adipisicing
                            elit. Esse itaque libero praesentium autem, atque
                            corrupti explicabo voluptatum neque adipisci. Minima
                            nostrum voluptas quas! Fugit maiores aperiam,
                            numquam tempore sint ratione distinctio molestiae
                            illo asperiores est, inventore, modi reiciendis
                            totam explicabo. Lorem ipsum dolor sit amet
                            consectetur adipisicing elit. Odio aspernatur neque
                            voluptatibus et quas ab a dolore beatae facere
                            impedit. Deleniti nesciunt corrupti architecto
                            eaque, veritatis aspernatur harum soluta est earum
                            odio alias. Maxime nesciunt laudantium consequuntur
                            neque rerum labore.
                        </p>
                    </div>
                </div>
            </div>
        </section>
    </Layout>
</template>

<script setup>
import Layout from "../Shared/Layout.vue";
import PlaceholderNft from "../../img/placeholder-nft.jpg";
</script>
