new fullpage("#fullpage", {
  autoScrolling: true,
  lazyLoading: false,
  // scrollBar: true,
  navigation: true,
  navigationTooltips: ["Nổi Bật", "Danh Sách", "Top", "Team"],
  responsiveWidth: 992,
  scrollingSpeed: 700,
  afterLoad: () => {
    document
      .querySelectorAll(".fp-table.active .aos-init")
      .forEach((element) => {
        element.classList.add("aos-animate");
      });
  },
});
