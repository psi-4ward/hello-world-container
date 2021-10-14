FROM php:8-alpine
MAINTAINER Christoph Wiechert <wio@psitrax.de>

ADD docroot /docroot

# Add unprivileged user
# Create appuser.
ENV USER=helloworld
ENV UID=10001

RUN adduser \
    --disabled-password \
    --gecos "" \
    --home "/nonexistent" \
    --shell "/sbin/nologin" \
    --no-create-home \
    --uid "${UID}" \
    "${USER}"

# Set labels
# Now we DO need these, for the auto-labeling of the image
ARG BUILD_DATE
ARG VCS_REF

LABEL org.label-schema.build-date=$BUILD_DATE \
      org.label-schema.vcs-url="https://github.com/psi-4ward/hello-world-container.git" \
      org.label-schema.vcs-ref=$VCS_REF \
      org.label-schema.schema-version="1.0"

CMD ["php", "-S", "0.0.0.0:9000", "-t", "/docroot", "docroot/index.php"]
