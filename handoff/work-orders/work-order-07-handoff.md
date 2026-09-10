## Known technical debt flagged during WO-05

- iframe height collapse risk: img/video/iframe/embed all
  have height: auto. Any fixed-ratio embed (YouTube, Vimeo,
  etc.) added without an aspect-ratio wrapper will collapse
  to 0px height. Fix at time of first embed addition with
  either aspect-ratio: 16/9 on the iframe or a
  .de-embed-wrapper { position: relative; padding-bottom: 56.25% }
  pattern. Do not fix preemptively — no embeds exist yet.
