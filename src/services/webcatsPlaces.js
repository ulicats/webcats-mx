const WEBCATS_PLACE_ID = "ChIJE679CJonugIRxmqlG5w_Jko";

export async function getWebcatsPlace() {
  const apiKey = import.meta.env.VITE_GOOGLE_PLACES_API_KEY;

  if (!apiKey) {
    throw new Error("No se encontró VITE_GOOGLE_PLACES_API_KEY");
  }

  const fields = [
    "displayName",
    "rating",
    "userRatingCount",
    "reviews",
    "googleMapsUri"
  ].join(",");

  const response = await fetch(
    `https://places.googleapis.com/v1/places/${WEBCATS_PLACE_ID}`,
    {
      method: "GET",
      headers: {
        "X-Goog-Api-Key": apiKey,
        "X-Goog-FieldMask": fields,
        "Accept-Language": "es"
      }
    }
  );

  const data = await response.json();

  if (!response.ok) {
    console.error("Google Places error:", data);

    throw new Error(
      data?.error?.message ||
      "No fue posible obtener las reseñas de Google."
    );
  }

  return data;
}