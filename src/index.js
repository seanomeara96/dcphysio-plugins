wp.blocks.registerBlockType("ourplugin/business-details", {
  title: "Business Details",
  icon: "smiley",
  category: "common",
  edit: function () {
    return <h2>Show Business Details</h2>;
  },
});

wp.blocks.registerBlockType("ourplugins/review-carousel", {
  title: "Review Carousel",
  icon: "smiley",
  category: "commmn",
  edit: function () {
    return <h2>Show Reviews Carousel</h2>;
  },
});
