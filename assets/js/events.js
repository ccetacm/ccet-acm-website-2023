console.clear();

      const { gsap, imagesLoaded } = window;

      const buttons = {
        prev: document.querySelector(".events-btn--left"),
        next: document.querySelector(".events-btn--right"),
      };
      const cardsContainerEl = document.querySelector(".events-cards__wrapper");
      const appBgContainerEl = document.querySelector(".events-app__bg");

      const cardInfosContainerEl = document.querySelector(".events-info__wrapper");

      buttons.next.addEventListener("click", () => swapCards("right"));

      buttons.prev.addEventListener("click", () => swapCards("left"));

      function swapCards(direction) {
        const currentCardEl = cardsContainerEl.querySelector(".events-current--card");
        const previousCardEl =
          cardsContainerEl.querySelector(".events-previous--card");
        const nextCardEl = cardsContainerEl.querySelector(".events-next--card");

        const currentBgImageEl =
          appBgContainerEl.querySelector(".events-current--image");
        const previousBgImageEl =
          appBgContainerEl.querySelector(".events-previous--image");
        const nextBgImageEl = appBgContainerEl.querySelector(".events-next--image");

        changeInfo(direction);
        swapCardsClass();

        removeCardEvents(currentCardEl);

        function swapCardsClass() {
          currentCardEl.classList.remove("events-current--card");
          previousCardEl.classList.remove("events-previous--card");
          nextCardEl.classList.remove("events-next--card");

          currentBgImageEl.classList.remove("events-current--image");
          previousBgImageEl.classList.remove("events-previous--image");
          nextBgImageEl.classList.remove("events-next--image");

          currentCardEl.style.zIndex = "50";
          currentBgImageEl.style.zIndex = "-2";

          if (direction === "right") {
            previousCardEl.style.zIndex = "20";
            nextCardEl.style.zIndex = "30";

            nextBgImageEl.style.zIndex = "-1";

            currentCardEl.classList.add("events-previous--card");
            previousCardEl.classList.add("events-next--card");
            nextCardEl.classList.add("events-current--card");

            currentBgImageEl.classList.add("events-previous--image");
            previousBgImageEl.classList.add("events-next--image");
            nextBgImageEl.classList.add("events-current--image");
          } else if (direction === "left") {
            previousCardEl.style.zIndex = "30";
            nextCardEl.style.zIndex = "20";

            previousBgImageEl.style.zIndex = "-1";

            currentCardEl.classList.add("events-next--card");
            previousCardEl.classList.add("events-current--card");
            nextCardEl.classList.add("events-previous--card");

            currentBgImageEl.classList.add("events-next--image");
            previousBgImageEl.classList.add("events-current--image");
            nextBgImageEl.classList.add("events-previous--image");
          }
        }
      }

      function changeInfo(direction) {
        let currentInfoEl =
          cardInfosContainerEl.querySelector(".events-current--info");
        let previousInfoEl =
          cardInfosContainerEl.querySelector(".events-previous--info");
        let nextInfoEl = cardInfosContainerEl.querySelector(".events-next--info");

        gsap
          .timeline()
          .to([buttons.prev, buttons.next], {
            duration: 0.2,
            opacity: 0.5,
            pointerEvents: "none",
          })
          .to(
            currentInfoEl.querySelectorAll(".events-text"),
            {
              duration: 0.4,
              stagger: 0.1,
              translateY: "-120px",
              opacity: 0,
            },
            "-="
          )
          .call(() => {
            swapInfosClass(direction);
          })
          .call(() => initCardEvents())
          .fromTo(
            direction === "right"
              ? nextInfoEl.querySelectorAll(".events-text")
              : previousInfoEl.querySelectorAll(".events-text"),
            {
              opacity: 0,
              translateY: "40px",
            },
            {
              duration: 0.4,
              stagger: 0.1,
              translateY: "0px",
              opacity: 1,
            }
          )
          .to([buttons.prev, buttons.next], {
            duration: 0.2,
            opacity: 1,
            pointerEvents: "all",
          });

        function swapInfosClass() {
          currentInfoEl.classList.remove("events-current--info");
          previousInfoEl.classList.remove("events-previous--info");
          nextInfoEl.classList.remove("events-next--info");

          if (direction === "right") {
            currentInfoEl.classList.add("events-previous--info");
            nextInfoEl.classList.add("events-current--info");
            previousInfoEl.classList.add("events-next--info");
          } else if (direction === "left") {
            currentInfoEl.classList.add("events-next--info");
            nextInfoEl.classList.add("events-previous--info");
            previousInfoEl.classList.add("events-current--info");
          }
        }
      }

      function updateCard(e) {
        const card = e.currentTarget;
        const box = card.getBoundingClientRect();
        const centerPosition = {
          x: box.left + box.width / 2,
          y: box.top + box.height / 2,
        };
        let angle = Math.atan2(e.pageX - centerPosition.x, 0) * (35 / Math.PI);
        gsap.set(card, {
          "--current-card-rotation-offset": `${angle}deg`,
        });
        const currentInfoEl =
          cardInfosContainerEl.querySelector(".events-current--info");
        gsap.set(currentInfoEl, {
          rotateY: `${angle}deg`,
        });
      }

      function resetCardTransforms(e) {
        const card = e.currentTarget;
        const currentInfoEl =
          cardInfosContainerEl.querySelector(".events-current--info");
        gsap.set(card, {
          "--current-card-rotation-offset": 0,
        });
        gsap.set(currentInfoEl, {
          rotateY: 0,
        });
      }

      function initCardEvents() {
        const currentCardEl = cardsContainerEl.querySelector(".events-current--card");
        currentCardEl.addEventListener("pointermove", updateCard);
        currentCardEl.addEventListener("pointerout", (e) => {
          resetCardTransforms(e);
        });
      }

      initCardEvents();

      function removeCardEvents(card) {
        card.removeEventListener("pointermove", updateCard);
      }

      function init() {
        let tl = gsap.timeline();

        tl.to(cardsContainerEl.children, {
          delay: 0.15,
          duration: 0.5,
          stagger: {
            ease: "power4.inOut",
            from: "right",
            amount: 0.1,
          },
          "--card-translateY-offset": "0%",
        })
          .to(
            cardInfosContainerEl
              .querySelector(".events-current--info")
              .querySelectorAll(".events-text"),
            {
              delay: 0.5,
              duration: 0.4,
              stagger: 0.1,
              opacity: 1,
              translateY: 0,
            }
          )
          .to(
            [buttons.prev, buttons.next],
            {
              duration: 0.4,
              opacity: 1,
              pointerEvents: "all",
            },
            "-=0.4"
          );
      }

      const waitForImages = () => {
        const images = [...document.querySelectorAll("img")];
        const totalImages = images.length;
        let loadedImages = 0;
        const loaderEl = document.querySelector(".events-loader span");

        gsap.set(cardsContainerEl.children, {
          "--card-translateY-offset": "100vh",
        });
        gsap.set(
          cardInfosContainerEl
            .querySelector(".events-current--info")
            .querySelectorAll(".events-text"),
          {
            translateY: "40px",
            opacity: 0,
          }
        );
        gsap.set([buttons.prev, buttons.next], {
          pointerEvents: "none",
          opacity: "0",
        });

        images.forEach((image) => {
          imagesLoaded(image, (instance) => {
            if (instance.isComplete) {
              loadedImages++;
              let loadProgress = loadedImages / totalImages;

              gsap.to(loaderEl, {
                duration: 1,
                scaleX: loadProgress,
                backgroundColor: `hsl(${loadProgress * 120}, 100%, 50%`,
              });

              if (totalImages == loadedImages) {
                gsap
                  .timeline()
                  .to(".events-loading__wrapper", {
                    duration: 0.8,
                    opacity: 0,
                    pointerEvents: "none",
                  })
                  .call(() => init());
              }
            }
          });
        });
      };

      waitForImages();