<template >
    <CCarousel
    arrows
    indicators
    animate="true"
    interval="2000"
    
    
  >
    <CCarouselItem
      captionHeader="First Slide"
      image="delivery/del1.png"
      captionText="Nulla vitae elit libero, a pharetra augue mollis interdum."
    />
    <CCarouselItem
     image="delivery/del2.jpg"
    />
    <CCarouselItem
     image="delivery/del3.png"
    />
  </CCarousel>
</template>
<script>
export default {
    name: 'carousal'
}
</script>