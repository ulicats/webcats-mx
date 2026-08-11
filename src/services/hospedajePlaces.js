const PLACE_ID = "ChIJvZNYQPcJL4QRkJedUmh4zM0";

export async function gethospedajePlace(apiKey) {
  const fields = [
    "displayName",
    "rating",
    "userRatingCount",
    "reviews",
    "googleMapsUri",
  ].join(",");

  const response = await fetch(
    `https://places.googleapis.com/v1/places/${PLACE_ID}`,
    {
      headers: {
        "X-Goog-Api-Key": apiKey,
        "X-Goog-FieldMask": fields,
        "Accept-Language": "es-MX",
      },
    }
  );

  const data = await response.json();

  if (!response.ok) {
    console.error("Google Places error:", data);
    throw new Error(
      data?.error?.message || "No se pudo consultar Google Places."
    );
  }

  return data;
}