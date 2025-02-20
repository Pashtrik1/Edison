<template>
    <div 
        v-if="showBanner"
        class="cookie-banner tds-scrim--white a relative z-1" 
        id="cookie_banner" 
        style="width: 100%; height: auto; z-index: 100002; position: fixed; bottom: 0px; display: flex; align-items: center; background: rgb(255, 255, 255); padding: 16px 48px; box-shadow: rgba(0, 0, 0, 0.12) 0px 8px 16px 0px; flex-flow: row;">
        <div style="flex: 1 1 0%; font-size: 12px; margin-right: 24px;">
            <strong>Helfen Sie uns, unsere Website mit Cookies zu verbessern</strong><br>
            <p style="max-inline-size: 100%;">Wir verwenden Cookies und verarbeiten Daten von Ihrem Gerät, um die Leistung der Website zu analysieren, Werbeinhalte zu personalisieren und Ihre Nutzererfahrung zu verbessern. Ihre Einwilligung umfasst auch Datenübertragungen außerhalb des Landes, in dem Sie sich befinden, beispielsweise in die USA. Weitere Informationen hierzu finden Sie in den 
                <a id="cookie-settings" style="text-decoration: underline" href="https://www.tesla.com/de_de/legal/cookies" class="cookie-settings-url" target="_blank" rel="noopener noreferrer">Cookies-Einstellungen</a>.</p>
        </div>
        <div id="tsla-button-container" style="display: flex; flex-flow: row; gap: 10px;">
            <button @click="acceptCookie" 
                style="background-color: rgba(0, 0, 0, 0.05); vertical-align: middle; height: 32px; border-radius: 4px; align-items: center; box-shadow: transparent 0px 0px 0px 2px inset; display: inline-flex; font-size: 14px; font-weight: 500; justify-content: center; line-height: 1.2; padding: 4px 24px; position: relative; text-align: center; text-transform: inherit; border: 3px solid transparent; transition: border-color 0.33s, background-color 0.33s, color 0.33s, box-shadow 0.25s; min-width: 137px;">
                Akzeptieren
            </button>
            <button @click="rejectCookie" 
                style="background-color: rgba(0, 0, 0, 0.05); vertical-align: middle; height: 32px; border-radius: 4px; align-items: center; box-shadow: transparent 0px 0px 0px 2px inset; display: inline-flex; font-size: 14px; font-weight: 500; justify-content: center; line-height: 1.2; padding: 4px 24px; position: relative; text-align: center; text-transform: inherit; border: 3px solid transparent; transition: border-color 0.33s, background-color 0.33s, color 0.33s, box-shadow 0.25s; min-width: 137px;">
                Ablehnen
            </button>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            showBanner: true, // Banner anzeigen
        };
    },
    methods: {
        acceptCookie() {
            document.cookie = "cookie_consent=accepted; expires=Fri, 31 Dec 9999 23:59:59 GMT; path=/";
            this.showBanner = false; // Banner ausblenden
        },
        rejectCookie() {
            document.cookie = "cookie_consent=declined; expires=Fri, 31 Dec 9999 23:59:59 GMT; path=/";
            this.showBanner = false; // Banner ausblenden
        }
    }
};
</script>
