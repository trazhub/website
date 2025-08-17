import "./globals.css";
import React, { ReactNode } from "react";
import type { Metadata } from "next";
import { Syne } from "next/font/google";
import { SpeedInsights } from "@vercel/speed-insights/next";

const syne = Syne({
    subsets: ["latin"],
    display: "block",
    weight: ["400", "500", "600", "700", "800"],
});

export const metadata: Metadata = {
    metadataBase: new URL("https://traz.cloud"),
    title: "TRAZHUB",
    description:
    "Student, currently studying at Poornima University.Focused on immersive experiences,studying in Rajasthan,India.",
    generator: "Next.js",
    applicationName: "GARVVERMA",
    keywords: [
        "Garv verma",
        "Ghaziabad",
        "Garv verma portfolio",
        "Garv verma developer",
        "Garv verma designer",
        "India",
    ],
    colorScheme: "dark",
    openGraph: {
        title: "TRAZHUB - Designer",
        description:
      "Student, currently studying at Poornima University.Focused on immersive experiences,studying in Rajasthan,India",
        url: "https://opop.eu.org/",
        siteName: "opop.eu.org",
        images: [
            {
                url: "./public/metadata.jpg",
                width: 1200,
                height: 630,
                alt: "TRAZHUB - Designer",
            },
        ],
        locale: "en-US",
        type: "website",
    },
    twitter: {
        card: "summary_large_image",
        title: "TRAZHUB - Designer ",
        description:
      "Student, currently studying at Sharda University Noida. Focused on immersive experiences, studying in Ghaziabad, India.",
        creator: "Garv",
        creatorId: "0000000000",
        images: ["./public/okay1.png"],
    },
    robots: {
        index: true,
        follow: true,
        nocache: false,
        googleBot: {
            index: true,
            follow: false,
            noimageindex: true,
            "max-video-preview": -1,
            "max-image-preview": "large",
            "max-snippet": -1,
        },
    },
    category: "technology",
};

type RootLayoutProps = {
  children: ReactNode;
};

export default function RootLayout({ children }: RootLayoutProps) {
    return (
        <html lang="en">
            <body
                className={`${syne.className} scroll-smooth scrollbar-none scrollbar-track-[#0E1016] scrollbar-thumb-[#212531]`}
            >
                {children}
                <SpeedInsights />
            </body>
        </html>
    );
}
