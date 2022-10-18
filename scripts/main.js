$(document).ready(function () {
  //Observer
  const left = $(".slide-left").toArray();
  const right = $(".slide-right").toArray();
  const up = $(".slide-up").toArray();

  const sliders = left.concat( right, up);

  const appearOptions = {
    threshold: 0.15,
    rootMargin: "0px 0px -100px 0px",
  };
  const appearOnScroll = new IntersectionObserver(function (
    entries,
    appearOnScroll
  ) {
    entries.forEach((entry) => {
      if (!entry.isIntersecting) {
        return;
      } else {
        entry.target.classList.add("appear");
        appearOnScroll.unobserve(entry.target);
      }
    });
  },
  appearOptions);

  sliders.forEach((slider) => {
    appearOnScroll.observe(slider);
  });

  //Buttons
  //Navigation Open
  $("#menuBtn").click(function () {
    $(this).css("display", "none");
    $("#navList").css("display", "flex");
    $(".blur-overlay").css("display", "block");
  });

  //Navigation Close
  $("#menuClose").click(function () {
    $("#menuBtn").css("display", "block");
    $("#navList").css("display", "none");
    $(".blur-overlay").css("display", "none");
  });
});
